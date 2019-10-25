$(document).ready(function(){
    $('.btnAdd').click(function(){
        $('#addForm').show();
        $('#updateForm').hide();
        $('#deleteForm').hide();
        $('.titlePage').text("Thêm bài viết");
    })
    $('.btnUpdate').click(function(){
        $('#addForm').hide();
        $('#updateForm').show();
        $('#deleteForm').hide();
        $('.titlePage').text("Sửa bài viết");
    })
    $('.btnDelete').click(function(){
        $('#addForm').hide();
        $('#updateForm').hide();
        $('#deleteForm').show();
        $('.titlePage').text("Xóa bài viết");
    })
    // $('.submit-add').click(function(){
    //     $.ajax({
    //         url : "addPost.php",
    //         type : "POST",
    //         datatype : "text",
    //         data : {
    //             code : $("#addCode").val(),
    //             title : $("#addTitle").val(),
    //             date : $("#addDate").val(),
    //             content : $("#addContent").val()
    //         }
    //     });
    // })
    // $('.submit-update').click(function(){
    //     $.ajax({
    //         url : "updatePost.php",
    //         type : "POST",
    //         datatype : "text",
    //         data : {
    //             code : $("#updateCode").val(),
    //             title : $("#updateTitle").val(),
    //             date : $("#updateDate").val(),
    //             content : $("#updateContent").val()
    //         }
    //     });
    // })
    // $('.submit-del').click(function(){
    //     $.ajax({
    //         url : "delPost.php",
    //         type : "get",
    //         datatype : "json",
    //         data : {
    //             code : $("#delCode").val(),
    //         }
    //     });
    // })
});