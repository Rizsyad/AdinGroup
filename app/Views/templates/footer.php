    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        let button = document.getElementsByClassName("btn-custome-success");

        function storeInLocalStorage(key, value) {
            let data = localStorage.getItem(key);

             data = data ? JSON.parse(data) : [];
             data.push(value);
            
            localStorage.setItem(key, JSON.stringify(data));
        }

        Array.from(button).forEach(function(button) {
            button.addEventListener('click', function(e) {
                let idPesan = $(this).data("id")
                let storePemesanan = JSON.parse(localStorage.getItem("pemesanan")) || [];

                if(storePemesanan.includes(idPesan)) {
                    toastr.info('Pesanan anda sudah ditambahkan, silahkan cek di "Pesanan Anda" ')
                } else {
                    toastr.success('Pesanan telah ditambah ke pesanan anda')
                    storeInLocalStorage("pemesanan", idPesan)
                }
            });
        });
    </script>

    <script>
        $(document).ready(function(){

            const getLocalStorage = (key) => {
                let data = localStorage.getItem(key);
                data = data ? JSON.parse(data) : [];
                return data;
            }

            const removeLocalStorage = (id) => {
                const db = getLocalStorage("pemesanan");

                // console.log(db)

                const updateData = db.filter(element => element !== id);
                localStorage.setItem('pemesanan', JSON.stringify(updateData));
            }

            /* Fungsi formatRupiah */
            const rupiah = (number)=>{
                return new Intl.NumberFormat("id-ID", {
                    style: "currency",
                    currency: "IDR"
                }).format(number);
            }

            const jumlahPemesanan = () => {
                // jumlah pemesanan
                let jumlah = $(".item").map(function(idx, elem) {
                    return parseInt($(elem).val());
                }).get();

                if(jumlah.length <= 0) return $("#jumlah").html(`0 item`);
                $("#jumlah").html(`${jumlah.reduce(function(a, b){return a+b;})} item`);
            }

            const totalHargaPemesanan = () => {
                let totalHarga = 0;

                // total harga
                $("table").each(function(){
                    let $this = $(this);
                    
                    $this.children('tbody').each(function(){

                        if(!$(".item").length && !$(".price").length) return $("#totalHarga").html(rupiah("0"));

                        let tempItem = $(".item", this).map(function(idx, elem) {
                            return parseInt($(elem).val());
                        }).get();

                        if(tempItem.length <= 0) return;

                        let tempHarga = $(".price", this).map(function(idx, elem) {
                            return parseInt($(elem).html());
                        }).get();

                        if(tempHarga.length <= 0) return;

                        totalHarga = tempItem.map(function (num, idx) {
                            return num * tempHarga[idx];
                        }); 
                        
                        if(totalHarga.length <= 0) return $("#totalHarga").html(rupiah("0"));
                        $("#totalHarga").html(rupiah(totalHarga.reduce(function(a, b){return a+b;})));})
                });

                
            }

            jumlahPemesanan();
            totalHargaPemesanan();

            $(".harga").each(function() {
                let harga = $(this).text();
                $(this).html(rupiah(harga));
            })

            $(".item").bind('keyup click', function(){
                
                // live change jumlah pemesanan
                jumlahPemesanan();

                // live change total harga
                totalHargaPemesanan();
            })

            $(".delete").on("click", function(){
                let id = $(this).data("id");
                
                $(`tr[data-id='${id}']`).remove();

                jumlahPemesanan();
                totalHargaPemesanan();
                removeLocalStorage(id);
            })
        })
    </script>

</body>

</html>