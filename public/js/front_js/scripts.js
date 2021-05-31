
$(window).on('resize', function () {
});

function servicesCheckList(){
    setTimeout(function () {
        let length = $('input.service-check-input:checked').length;
        if(length > 0){
            $('.complete-submit').removeClass('disabled');
        }else{
            $('.complete-submit').addClass('disabled');
        }
    }, 50);

}

function accordion(){
    const accrBlk = $('.accr-blk');
    const accrBlkSelector = '.accr-blk';
    const accrBlkHead = $('.accr-blk-head');
    const accrBlkBody = $('.accr-blk-body');
    const accrBlkBodySelector = '.accr-blk-body';
    let $this;
    accrBlkHead.click(function () {
        $this = $(this);
        if(!$this.closest(accrBlkSelector).hasClass('active')){
            accrBlk.removeClass('active');
            accrBlkBody.slideUp();
            $this.closest(accrBlkSelector).addClass('active');
            $this.closest(accrBlkSelector).find(accrBlkBodySelector).slideDown();
            accrBlk.find('.accr-blk-head i').removeClass('fa-sort-up');
            accrBlk.find('.accr-blk-head i').addClass('fa-sort-down');
            $this.closest(accrBlkSelector).find('.accr-blk-head i').removeClass('fa-sort-down');
            $this.closest(accrBlkSelector).find('.accr-blk-head i').addClass('fa-sort-up');
        }else{
            $this.closest(accrBlkSelector).removeClass('active');
            $this.closest(accrBlkSelector).find(accrBlkBodySelector).slideUp();
            $this.closest(accrBlkSelector).find('.accr-blk-head i').removeClass('fa-sort-up');
            $this.closest(accrBlkSelector).find('.accr-blk-head i').addClass('fa-sort-down');
        }
    });
}

function formPlainStyle(){
    let formControlVal;
    const formControlOfFrom = $('.form-plain-style .form-control'),
        formGroupSelector = '.form-group',
        toggledClassForGroup = 'group-focused';

    formControlOfFrom.focus(function () {
        $(this).closest(formGroupSelector).addClass(toggledClassForGroup);
    });
    formControlOfFrom.blur(function () {
        formControlVal =  $(this).val();
        if(formControlVal == null || formControlVal == undefined || formControlVal == ''){
            $(this).closest(formGroupSelector).removeClass(toggledClassForGroup);
        }
    });
}


$(document).ready(function () {
    accordion();
    formPlainStyle();
    
    $('body .accr-blk.accr-blk-first .accr-blk-head').click();
    $('.service-check-label').click(function () {
        servicesCheckList();
    });

    $('.increase-quantity').click(function () {
        let input = $(this).closest('div').find('input');
        let inputVal = $(this).closest('div').find('input').val();
        input.val(parseInt(inputVal)+1);
        if(inputVal < 0){
            $(this).closest('.form-group').find('.invalid-feedback').show();
        }else{
            $(this).closest('.form-group').find('.invalid-feedback').hide();
        }

    });

    $('.decrease-quantity').click(function (e) {
        let input = $(this).closest('div').find('input');
        let inputVal = $(this).closest('div').find('input').val();
        if(!(inputVal <= 1)){
            input.val(parseInt(inputVal)-1);
        }else{
            e.preventDefault();
        }
    });

    $('.service-item-quantity-details input').blur(function () {
       if($(this).val() <= 0){
           $(this).closest('.form-group').find('.invalid-feedback').show();
       }else{
           $(this).closest('.form-group').find('.invalid-feedback').hide();
       }
    });

$.fn.nearest = function(selector) {
  // base case if we can't find anything
  if (this.length == 0)
    return this;
  var nearestSibling = this.prevAll(selector + ':first');
  if (nearestSibling.length > 0)
    return nearestSibling;
  return this.parent().nearest(selector);
};


    $('.remove-service-e').click(function () {

        const $thisService = $(this);
        const contentLength = $('.accr-blk-body .service-item-quantity').length;
        // var serviceList = $(this).prev().remove();

        //$(this).parent().parent().parent().prev().prev().remove()
        var serviceListCount = $(this).parent().parent().parent().children().length;

        if (serviceListCount <= 1) {
        setTimeout(function () {
            $thisService.nearest('.service-item-quantity-head').remove()
            }, 500);
        }
       
        $thisService.fadeOut('fast');
        $thisService.closest('.service-item-quantity').slideUp('slow');
        setTimeout(function () {
            $thisService.closest('.service-item-quantity').replaceWith('');
            if(contentLength <= 1){
                if($('body').hasClass('rtl')){
                    $('.service-items-container').append('لا يوجد خدمات');
                }else {
                    $('.service-items-container').append('no services');
                }
                $('.order-submit').addClass('disabled');
                $('.personal-info input').attr('disabled','');

            }
        }, 500);

    });

});