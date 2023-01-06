<?php
namespace App\Helpers;

use App\Models\Category;
use App\Models\General;
use App\Models\Notification;

class FunctionHelpers
{
    public static function showCategorySelect($categories, $parent_id = 0, $char = '', $checked = '', $level = 0)
    {
        foreach ($categories as $key => $item)
        {
            $disable = '';
            if ($level < 2) {
                $disable = 'disabled';
            }

            // Nếu là chuyên mục con thì hiển thị
            if ($item['parent_id'] == $parent_id)
            {
                $selected = '';
                if($item['id'] == $checked){
                    $selected = 'selected="selected"';
                }
                echo '<option '.$selected.' '. $disable .' value="'.$item['id'].'">';
                echo $char . $item['title'];
                echo '</option>';

                // Xóa chuyên mục đã lặp
                unset($categories[$key]);

                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                self::showCategorySelect($categories, $item['id'], $char.'|---', $checked, $level + 1);
            }
        }
    }

    public static function getFirstLetterOfEachWord($strings): string
    {
        $strings = ucwords(strtolower(self::stripUnicode($strings)));
        $words = explode(" ", $strings);
        $acronym = "";

        foreach ($words as $w) {
            $acronym .= $w[0];
        }
        return $acronym;
    }
    public static function stripUnicode($str){
        if(!$str) return false;
        $unicode = array(
//            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
//            'd'=>'đ|Đ',
//            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
//            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
//            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
//            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
//            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|E|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|O|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
        return $str;
    }
    /**
     * @param $categories
     * @param null $selected
     * @param int $parent_id
     * @param string $serial
     * @param string $padding
     */
    public static function show_categories_select($categories, $selected = null, $parent_id = 0, $serial = '', $padding = '')
    {
        $cate_child = array();
        foreach ($categories as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $cate_child[] = $item;
                unset($categories[$key]);
            }
        }

        usort($cate_child, function ($a, $b) {
            return $a['serial'] > $b['serial'];
        });

        if ($cate_child) {
            foreach ($cate_child as $key => $item) {
                $dot = $serial == '' ? $item['serial'] : $serial . '.' . $item['serial'];
                echo '<option ' . ($item['id'] == $selected ? 'selected' : '') . ' value="' . $item['id'] . '">' . $dot . '. ' . $padding . ' ' . $item['title'] .'</option>';
                FunctionHelpers::show_categories_select($categories, $selected, $item['id'], $dot, $padding . '——');
            }
        }
    }

    public static function getGeneralInfo()
    {
        return General::find(1);
    }
    public static function getNumberNotification($user_id)
    {
        $number =  Notification::where([['to', $user_id],['seen', '=', NULL]])->count();
        if($number > 9)
            $number = '9+';

        return $number;
    }
    /**
     * @param $categories
     * @param int $parent_id
     */
    public static function  show_categories_nestable($categories, $parent_id = 0)
    {
        $cate_child = array();
        foreach ($categories as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $cate_child[] = $item;
                unset($categories[$key]);
            }
        }

        usort($cate_child, function ($a, $b) {
            return $a['serial'] > $b['serial'];
        });

        if ($cate_child) {
            echo '<ol class="dd-list">';
            foreach ($cate_child as $key => $item) {
                echo '<li class="dd-item" data-id="' . $item['id'] . '"><div class="dd-handle">' . $item['name'] . '</div > ';
                FunctionHelpers::show_categories_nestable($categories, $item['id']);
                echo '</li>';
            }
            echo '</ol>';
        }
    }
}
