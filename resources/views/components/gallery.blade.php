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














