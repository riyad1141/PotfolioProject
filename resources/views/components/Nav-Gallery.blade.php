<div class="page-header d-flex align-items-center">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
                <h2>Nature (16 images)</h2>
                <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>

                <a class="cta-btn" href="{{url('/Contact')}}">Available for hire</a>

            </div>
        </div>
    </div>
</div>


<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
    <div class="container-fluid">

        <div class="row gy-4 justify-content-center" id="image-data">

        </div>

    </div>
</section><!-- End Gallery Section -->




<script>

    getImg();

    async  function getImg(){
        try {

            let URL = "/gallery_Data";
            let response = await axios.get(URL);

            response.data.forEach(function (item) {

                document.getElementById('image-data').innerHTML += (`

                <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                    <img src="${item['image']}" class="img-fluid" alt="">
                    <div class="gallery-links d-flex align-items-center justify-content-center">
                        <a href="${item['link1']}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        <a href="${item['link2']}" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
            </div>

                `);

            });

        }catch (e) {
            alert(e);
        }
    }

</script>
