function convertToRupiah(angka) {
    var rupiah = '';
    var angkarev = angka.toString().split('').reverse().join('');
    for (var i = 0; i < angkarev.length; i++)
        if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
    return rupiah.split('', rupiah.length - 1).reverse().join('');
}
total()


    
    function hitungDomain(val) {
        if (val == "buat-baru") {
            val = 1000000;
        } else if(val == "prongiklan"){
            val = 350000;
        }else {
            val = 0 ;
        }
        var divobj = document.getElementById('tot-domain');
        divobj.value = convertToRupiah(val)
        
        total();
    }
    function rupiahIn() {
        document.getElementById("tot-cr").value = convertToRupiah(document.getElementById("tot-cr").value) ;
        document.getElementById("tot-assets").value = convertToRupiah(document.getElementById("tot-assets").value) ;
        document.getElementById("motion").value = "tidak" ;
        document.getElementById("design-iklan").value = 0 ;


    }
    function hitungEmail(val) {
        var divobj = document.getElementById('tot-email');
        val = val * 150000;
        divobj.value = convertToRupiah(val)
        
        total();
    }
    function hitungHalaman(val) {
        var divobj = document.getElementById('tot-web-design');
        val = val * 200000;
        divobj.value = convertToRupiah(val)
        total();
    }
    function hitungMultiLanguage(val) {
        if (val == "ya") {
            val = 500000;
        }else {
            val = 0 ;
        }

        var divobj = document.getElementById('tot-ml');
        divobj.value = convertToRupiah(val)
        total();
    }
    function hitungCta(val) {
        if (val == "ya") {
            val = 100000;
        }else {
            val = 0 ;
        }

        var divobj = document.getElementById('tot-cta');
        divobj.value = convertToRupiah(val)
        total();
    }

    function hitungIklan(val) {
        if (val == "instagram") {
            val = 200000;
            document.getElementById('motion').disabled = false;
            document.getElementById('design-iklan').disabled = false;
        } else if(val == "facebook"){
            val = 200000;
            document.getElementById('motion').disabled = false;
            document.getElementById('design-iklan').disabled = false;
        }else if(val == "google") {
            val = 500000 ;
            document.getElementById('motion').disabled = false;
            document.getElementById('design-iklan').disabled = false;
        } else {
            val = 0 ;
            hitungMotion('tidak');
            hitungDesignIklan(0)
            document.getElementById('motion').value = "tidak" ;
            document.getElementById('motion').disabled = true;
            document.getElementById('design-iklan').value = val ;
            document.getElementById('design-iklan').disabled = true;
            
        }

        var divobj = document.getElementById('tot-iklan');
        divobj.value = convertToRupiah(val)

        total();
    }

    function hitungMotion(val) {
        if (val == "ya") {
            val = 500000;
        }else {
            val = 0 ;
        }

        var divobj = document.getElementById('tot-motion');
        divobj.value = convertToRupiah(val)
        total();

    }

    function hitungDesignIklan(val) {
        var divobj = document.getElementById('tot-design-iklan');
        val = val * 50000;
        divobj.value = convertToRupiah(val)
        total();
    }

    function total (){
        let getClass = document.getElementsByClassName('total')
        var total = 0
        for (let i = 0; i < getClass.length; i++) {

            total = total + parseFloat(getClass[i].value.replace(/\./g,""))
        }
        document.getElementById("total").value = convertToRupiah(total)
    }

    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
    function onlyfive(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 53 || ASCIICode > 57))
            return false;
        return true;
    }
//   total()
 