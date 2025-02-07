
var th = {
    nav_features:'แนะนำ',
    nav_promotion: 'โปรโมชั่น',
    nav_topsell: 'ขายดี',
    nav_toprate: 'ยอดนิยม',
    nav_all: 'ทั้งหมด',
    get:'รับ',
    del_but: 'ลบ',
    clear:'เคลียร์ทั้งหมด',
    order_price:'ราคาสินค้า',
    discount:'ส่วนลด',
    discount_price:'ส่วนลดราคา',
    total: 'ยอดรวม',
    ck_out: 'สั่งซื้อ',
    cus_bgr: 'เลือกส่วนผสมเบอร์เกอร์',
    bread_lang: 'แป้งขนมปัง',
    meat_lang: 'เนื้อสัตว์',
    topping_lang: 'ท็อปปิ้ง',
    veg_lang: 'ผัก',
    sauce_lang: 'ซอส',
    name_product: 'ชื่อสินค้า',
    all_order_price_lang: 'ราคารวมสินค้า',
    total_lang2:'ยอดรวม',
    confirm:'ยืนยัน',
    cancel:'ยกเลิก',
    my_order:'ออเดอร์ของฉัน',
    q:'คิวของคุณ',
    bh:'กลับสู่หน้าหลัก',
    tiyao:'นี่คือสินค้าทั้งหมดของคุณ',
    close:'ปิด'
}
var en = {
    nav_features:'Features',
    nav_promotion: 'Promotion',
    nav_topsell: 'Top Seller',
    nav_toprate: 'Top Rated',
    nav_all: 'All',
    get:'GET',
    del_but: 'delete',
    clear:'clear all',
    order_price:'order price',
    discount:'discount',
    discount_price:'discount',
    total: 'TOTAL',
    ck_out: 'Check Out',
    cus_bgr: 'Make Your Own Burger',
    bread_lang: 'Bread',
    meat_lang: 'Meat',
    topping_lang: 'Topping',
    veg_lang: 'Vegetable',
    sauce_lang: 'Sauce',
    name_product: 'Name',
    all_order_price_lang: 'all order price',
    total_lang2:'TOTAL',
    confirm:'confirm',
    cancel:'cancel',
    my_order:'My Orders',
    q:'Your Queue',
    bh:'back to homepage',
    tiyao:'This is your all order',
    close:'close'
}

function renderlang() {
    if (!localStorage.lang) {
        localStorage.setItem('lang', 'en')
    } else {
        $("#nav_features").text(settext('nav_features'))
        $("#nav_promotion").text(settext('nav_promotion'))
        $("#nav_topsell").text(settext('nav_topsell'))
        $("#nav_toprate").text(settext('nav_toprate'))
        $("#nav_all").text(settext('nav_all'))
        $("#get").text(settext('get'))
        $("#get2").text(settext('get'))
        $("#get3").text(settext('get'))
        $("#get4").text(settext('get'))
        $("#get5").text(settext('get'))
        $("#get6").text(settext('get'))
        $("#get7").text(settext('get'))
        $("#get8").text(settext('get'))
        $(".del-btn").text(settext('del_but'))
        $("#clear").text(settext('clear'))
        $(".order_price_lang").text(settext('order_price'))
        $(".discount_lang").text(settext('discount'))
        $(".discount_price_lang").text(settext('discount_price'))
        $("#total_lang").text(settext('total'))
        $("#openPop").text(settext('ck_out'))
        $("#exampleModalLabel").text(settext('cus_bgr'))
        $(".bread_lang").text(settext('bread_lang'))
        $(".meat_lang").text(settext('meat_lang'))
        $(".topping_lang").text(settext('topping_lang'))
        $(".veg_lang").text(settext('veg_lang'))
        $(".sauce_lang").text(settext('sauce_lang'))
        $(".name_prod_lang").text(settext('name_product'))
        $(".all_order_price_lang").text(settext('all_order_price_lang'))
        $(".total_lang2").text(settext('total_lang2'))
        $("#con").text(settext('confirm'))
        $("#can").text(settext('cancel'))
        $(".my_order_lang").text(settext('my_order'))
        $(".your_q_lang").text(settext('q'))
        $(".back_home").text(settext('bh'))
        $(".tiyao").text(settext('tiyao'))
        $("#clos_btn").text(settext('close'))
        $("#order").text(settext('get'))
    }
}

document.addEventListener('DOMContentLoaded', function() {
    renderlang();
});

function settext(key){
    if(localStorage.lang == 'en'){
        return en[key];
    }
    else{
        return th[key];
    }
}

function setlangth(){
    localStorage.setItem('lang','th');
    renderlang();
}
function setlangen(){
    localStorage.setItem('lang','en');
    renderlang();
}
