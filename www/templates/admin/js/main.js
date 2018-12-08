/**
 * Добавление нового продукта
 */

function addBus(){
    var itemName  = $('#newItemName').val();
    var itemPrice = $('#newItemPrice').val();
    var itemDesc  = $('#newItemDesc').val();

    var postData  = {itemName: itemName,
        itemPrice: itemPrice, itemDesc: itemDesc}; //массив json для POST запроса
    
    $.ajax({
        type: 'POST',
        async: true,
        url: "/admin/addbus/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
            if(data['success']){
                $('#newItemName').val('');
                $('#newItemPrice').val('');
                $('#newItemDesc').val(''); // очищаются поля формы
            }
        }
    });
}
/**
 * Изменение данных автопарка
 * 
 */
function updateBase(itemId){
   
    var itemName   = $('#itemName_' + itemId).val();
    var itemDesc   = $('#itemDesc_' + itemId).val();
    var itemPrice   = $('#itemPrice_' + itemId).val();


    //console.log(postData);
    var postData = {itemId: itemId, itemName: itemName, itemDesc: itemDesc,
        itemPrice: itemPrice};
                    
    $.ajax({
        type: 'POST',
        async: true,
        url: "/admin/updatebase/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
        }
    });
}

/**
 * удаление 
 */
function deleteBuse(itemId){

    var itemName   = $('#itemName_' + itemId).val();
    var itemDesc   = $('#itemDesc_' + itemId).val();
    var itemPrice   = $('#itemPrice_' + itemId).val();
    //console.log(postData);
    var postData = {itemId: itemId, itemName: itemName, itemDesc: itemDesc,
        itemPrice: itemPrice};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/admin/deletebus/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
        }
    });
}

/**
 * Добавление нового трансфера
 */

function addTransfer(){
    var itemParId  = $('#newItemParId').val();
    var itemPrice = $('#newItemPrice').val();
    var itemRoute  = $('#newItemRoute').val();

    var postData  = {itemParId: itemParId,
        itemPrice: itemPrice, itemRoute: itemRoute}; //массив json для POST запроса
    
    $.ajax({
        type: 'POST',
        async: true,
        url: "/admin/addtransfer/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
            if(data['success']){
                $('#newItemName').val('');
                $('#newItemPrice').val('');
                $('#newItemRoute').val(''); // очищаются поля формы
            }
        }
    });
}



/**
 * Изменение данных трансфера
 */
function updateTransfer(itemId){
   
    var itemParId   = $('#itemParId_' + itemId).val();
    var itemRoute  = $('#itemRoute_' + itemId).val();
    var itemPrice   = $('#ItemPrice_' + itemId).val();
   //console.log(postData);
    var postData = {itemId: itemId, itemParId: itemParId, 
        itemRoute: itemRoute, itemPrice: itemPrice};
                    
    $.ajax({
        type: 'POST',
        async: true,
        url: "/admin/updatetransfer/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
        }
    });
}

/**
 * удаление трансфера
 */
function delTransfer(itemId){

    var itemParId   = $('#itemParId_' + itemId).val();
    var itemRoute  = $('#itemRoute_' + itemId).val();
    var itemPrice   = $('#ItemPrice_' + itemId).val();

    var postData = {itemId: itemId, itemParId: itemParId, 
        itemRoute: itemRoute, itemPrice: itemPrice};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/admin/deletetransfer/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
        }
    });
}

/**
 * Добавление нового продукта
 */

function addCar(){
    var itemName  = $('#newItemName').val();
    var itemPrice = $('#newItemPrice').val();
    var itemDesc  = $('#newItemDesc').val();

    var postData  = {itemName: itemName,
        itemPrice: itemPrice, itemDesc: itemDesc}; //массив json для POST запроса
    
    $.ajax({
        type: 'POST',
        async: true,
        url: "/admin/addcar/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
            if(data['success']){
                $('#newItemName').val('');
                $('#newItemPrice').val('');
                $('#newItemDesc').val(''); // очищаются поля формы
            }
        }
    });
}

/**
 * Изменение данных vip
 * 
 */
function updateCar(itemId){
   
    var itemName   = $('#itemName_' + itemId).val();
    var itemDesc   = $('#itemDesc_' + itemId).val();
    var itemPrice   = $('#itemPrice_' + itemId).val();


    //console.log(postData);
    var postData = {itemId: itemId, itemName: itemName, itemDesc: itemDesc,
        itemPrice: itemPrice};
                    
    $.ajax({
        type: 'POST',
        async: true,
        url: "/admin/updatecar/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
        }
    });
}

/**
 * удаление 
 */
function deleteCar(itemId){

    var itemName   = $('#itemName_' + itemId).val();
    var itemDesc   = $('#itemDesc_' + itemId).val();
    var itemPrice   = $('#itemPrice_' + itemId).val();
    //console.log(postData);
    var postData = {itemId: itemId, itemName: itemName, itemDesc: itemDesc,
        itemPrice: itemPrice};
    $.ajax({
        type: 'POST',
        async: true,
        url: "/admin/deletecar/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
        }
    });
}