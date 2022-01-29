@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="/css/history.css" />
@endsection

@section('content')
<div class="history-container">
    <div class="btn-back">
        <a href="{{ route('event') }}"><i class="fas fa-arrow-alt-circle-left"></i><span> Trở về trang hái lộc</span></a>
    </div>
    <h1 class="history-title">Lịch sử hái lộc</h1>
    <div class="history-main">
        
        <div class="history-bar">
            <div class="history-load" style="width: 33%;" ></div>
        </div>

        <div class="history-bar-mb">
            <div class="history-load-mb" style="height:33%;" ></div>
        </div>

        <div class="history-date">
            <div class="history-block">
                <div class="history-content">
                    <h1>Ngày 01/02/2022</h1>
                    <ul>
                        @if(count($day1) == 0)
                        <li>Chưa có dữ liệu</li>
                        @endif
                        @foreach ($day1 as $gift)
                            <li>Đã hái <span id="myBtn">{{ $gift->gift->name }}</span></li>
                            <div id="eModalQue" class="e-modal-que">
                            <div class="e-modal-content-que">
                                <span id="close" class="e-close-que">&times;</span>
                                <img id="img-que" src="/images/que-chuc/que-chuc-1.jpg" />
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="history-block">
                <div class="history-content">
                    <h1>Ngày 01/02/2022</h1>
                    <ul>
                        
                        @if(count($day2) == 0)
                        <li>Chưa có dữ liệu</li>
                        @endif
                        @foreach ($day2 as $gift)
                            <li>Đã hái <span id="myBtn">{{ $gift->gift->name }}</span></li>
                            <div id="eModalQue" class="e-modal-que">
                            <div class="e-modal-content-que">
                                <span id="close" class="e-close-que">&times;</span>
                                <img id="img-que" src="/images/que-chuc/que-chuc-1.jpg" />
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="history-block">
                <div class="history-content">
                    <h1>Ngày 01/02/2022</h1>
                    <ul>
                        
                        @if(count($day3) == 0)
                        <li>Chưa có dữ liệu</li>
                        @endif
                        @foreach ($day3 as $gift)
                            <li>Đã hái <span id="myBtn">{{ $gift->gift->name }}</span></li>
                            <div id="eModalQue" class="e-modal-que">
                            <div class="e-modal-content-que">
                                <span id="close" class="e-close-que">&times;</span>
                                <img id="img-que" src="/images/que-chuc/que-chuc-1.jpg" />
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection

@section('custom-js')
<script>
    // Get the modal 2
var modal1 = document.getElementById("eModalQue");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn");
var imgQue = document.getElementById("img-que");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("e-close-que")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    let token = $("meta[name='csrf-token']").attr("content");
    $.post({
        type: 'POST',
        crossDomain: true,
        url: '/gifts/random',
        data: {
            '_token': token
        },
        success: function(data) {
            console.log(data);
            if (data.error == 1) {
                alert(data.message);
            } else {
                imgQue.src = data.img;
                modal1.style.display = "block";
                modal2.style.display = "none";
                times.innerHTML = times.innerHTML - 1;
            }
        },
        error: function(jqXHR, exception) {
            console.log(jqXHR);
        }
    });
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal1.style.display = "none";
    }
}
</script>
@endsection