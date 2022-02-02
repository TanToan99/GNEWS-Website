@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ mix('css/history.css') }}" />
@endsection

@section('content')
<div class="history-container">
    <div class="btn-back">
        <a href="{{ route('event') }}"><i class="fas fa-arrow-alt-circle-left"></i><span> Trở về trang hái lộc</span></a>
    </div>
    <h1 class="history-title">Lịch sử hái lộc</h1>
    {{-- Model --}}
    <div id="eModalQue" class="e-modal-que">
        <div class="e-modal-content-que">
            <span id="close" class="e-close-que">&times;</span>
            <img id="img-que" src="/images/que-chuc/que-chuc-1.jpg" />
        </div>
    </div>
    <div id="eModalCard" class="e-modal-que">
        <div class="e-modal-card">
            <span id="number" style="display: none"></span>
            <span id="idgift" style="display: none"></span>
            <label for="fname">Chọn nhà mạng</label>
            <select name="card" id="aioConceptName">
                <option value="0">Viettel</option>
                <option value="1">Mobifone</option>
                <option value="2">Vinaphone</option>
              </select>
            <button id="submit">Submit</button>
        </div>
    </div>
    <div id="eModalCardResult" class="e-modal-que">
        <div class="e-modal-card-result">
            <p id="card-final" style="white-space: pre-line;">OKOKOKOK</p>
        </div>
    </div>

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
                            <li>Đã hái <span onclick="showResult({{$gift->id}})">{{ $gift->gift->name }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="history-block">
                <div class="history-content">
                    <h1>Ngày 02/02/2022</h1>
                    <ul>
                        @if(count($day2) == 0)
                        <li>Chưa có dữ liệu</li>
                        @endif
                        @foreach ($day2 as $gift)
                        <li>Đã hái <span onclick="showResult({{$gift->id}})">{{ $gift->gift->name }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="history-block">
                <div class="history-content">
                    <h1>Ngày 03/02/2022</h1>
                    <ul>
                        
                        @if(count($day3) == 0)
                        <li>Chưa có dữ liệu</li>
                        @endif
                        @foreach ($day3 as $gift)
                        <li>Đã hái <span onclick="showResult({{$gift->id}})">{{ $gift->gift->name }}</span></li>
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
    var modal2 = document.getElementById("eModalCard");
    var modal3 = document.getElementById("eModalCardResult");

    // Get the button that opens the modal
    var btn1 = document.getElementById("myBtn");
    var imgQue = document.getElementById("img-que");
    var cardFinal = document.getElementById("card-final");

    var btnSubmit = document.getElementById("submit");
    let number = document.getElementById("number");

    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("e-close-que")[0];
    function showResult(id){
        let token = $("meta[name='csrf-token']").attr("content");
        $.post({
            type: 'POST',
            crossDomain: true,
            url: '/gifts/result',
            data: {
                'id': id,
                '_token': token
            },
            success: function(data) {
                if (data.error == 1) {
                    alert(data.message);
                } else {
                    switch(data.type){
                        case 1:
                            imgQue.src = data.img;
                            modal1.style.display = "block";
                            break;
                        case 2:
                            number.innerHTML = id;
                            modal2.style.display = "block";
                            break;
                        case 3:
                            cardFinal.innerHTML = data.value;
                            modal3.style.display = "block";
                            break;
                    }
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
    btnSubmit.onclick = function(){
        btnSubmit.innerHTML = "Đang xử lý";
        let token = $("meta[name='csrf-token']").attr("content");
        var conceptName = $('#aioConceptName').find(":selected").text();
        console.log(conceptName);
        $.post({
            type: 'POST',
            crossDomain: true,
            url: '/gifts/result',
            data: {
                'id': number.innerHTML,
                'nhamang': conceptName,
                '_token': token
            },
            success: function(data) {
                btnSubmit.innerHTML = "Submit";
                if (data.error == 1) {
                    alert(data.message);
                } else {
                    cardFinal.innerHTML = data.value;
                    modal2.style.display = "none";
                    modal3.style.display = "block";
                }
            },
            error: function(jqXHR, exception) {
                console.log(jqXHR);
            }
        });
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
        if (event.target == modal3) {
            modal3.style.display = "none";
        }

    }
</script>
@endsection