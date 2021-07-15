jQuery(document).ready( function($){ 

  var pPersentRefinance = 8.0;
  var pPersentNedvig = 8.0;

  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  };

  $(".calculator__refinance :input").inputFilter(function(value) {
    return /^-?\d*[.]?\d*$/.test(value); });

  function numberWithSpaces(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
  }

  function PMT(ir, np, pv, fv, type) {
    /*
      * ir   - interest rate per month
      * np   - number of periods (months)
      * pv   - present value
      * fv   - future value
      * type - when the payments are due:
      *        0: end of the period, e.g. end of month (default)
      *        1: beginning of period
      */
    var pmt, pvif;

    fv || (fv = 0);
    type || (type = 0);

    if (ir === 0)
        return (pv + fv)/np;

    pvif = Math.pow(1 + ir, np);
    
    pmt = ir * pv * (pvif + fv) / (pvif - 1);

    if (type === 1)
        pmt /= (1 + ir);

    return pmt;
  }

  function getCalcData(array, parent, ppersent){
    var empty = 0;

    Array.prototype.forEach.call(array, element => {
      if (!element.value.trim()){
        empty++;
        return false;
      }
    });

    if(empty == 0){
      var credit = Math.round(PMT(array[2].value / 1200, array[1].value * 12, array[0].value, 0, 0));
      var pcredit = Math.round(PMT(ppersent / 1200, array[1].value * 12, array[0].value, 0,0));

      $(parent).find('.calculator__credit').val(numberWithSpaces(credit) + ' ₽');
      $(parent).find('.calculator__pcredit').val(numberWithSpaces(pcredit) + ' ₽');
      $(parent).find('.calculator__benefit-month').val(numberWithSpaces(Math.round(credit - pcredit)) + ' ₽');
	  $(parent).find('.calculator__benefit').val(numberWithSpaces(Math.round((credit - pcredit) * array[1].value * 12)) + ' ₽');
    }
  }

  getCalcData($(':input[name^=r_price]'), $(':input[name^=r_price]').closest('.calculator__refinance'), pPersentRefinance);
  getCalcData($(':input[name^=n_price]'), $(':input[name^=n_price]').closest('.calculator__nedvig'), pPersentNedvig);

  $(':input[name^=r_price]').on('change paste keyup', function(){
    getCalcData($(':input[name^=r_price]'), this.closest('.calculator__refinance'), pPersentRefinance);
  });

  $(':input[name^=n_price]').on('change paste keyup', function(){
    getCalcData($(':input[name^=n_price]'), this.closest('.calculator__nedvig'), pPersentNedvig);
  });
});