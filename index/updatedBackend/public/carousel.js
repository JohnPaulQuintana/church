function selectServices(){
    $.ajax({
        url: "UpdatedBackend/Controller/User_Controller.php?type=show",
        type: "GET",
        dataType: "json",
        success:function(res){
            var html = ''
            var carIn = ''
            res.forEach((data,index) => {
                var activeClass = (index == 0) ? "active" : "";
                carIn += `<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="${index}" class="${activeClass}" aria-current="true" aria-label="Slide ${index+1}"></button>`
                html += `<div class="carousel-item ${activeClass}" data-bs-interval="10000" style="height:400px;">
                        <div class="d-flex align-items-center justify-content-center" style="height: 400px;">
                            <img src="../html/pictures/services/${data.picture}" class="custom-text-box-image img-fluid" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.5);">
                            <h5 class="text-capitalize">${data.services}</h5>
                            <p class="text-white text-break">${data.detail}</p>
                            <a href="http://localhost/church/index/booking.php" class="btn btn-outline-success">Book Now</a>
                        </div>
                    </div>`
            });
            $('#car-indi').html(carIn)
            $('#car-serve').html(html)
        }
    })
}

document.addEventListener("DOMContentLoaded", function() {
    selectServices()
  });