<div class="card">
    <div class="card-block">
        <div class="breadcrumb-header">
            <h5>{{$title}}</h5>
        </div>
        <div>
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                @foreach($breadcrumbs as $breadcrumb)
                <li class="breadcrumb-item"><a href="{{$breadcrumb['href'] ? $breadcrumb['href'] : 'javascript:void(0)'}}">{{$breadcrumb['name']}}</a>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
