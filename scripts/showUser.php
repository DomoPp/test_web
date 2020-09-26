<?php
    require "conn.php";

    $strSql = "SELECT * FROM user";
    $obj = mysqli_query($link,$strSql);
    // while ($rows = mysqli_fetch_array($obj)){
    //     echo $rows[0]."<br>";
    // }

    
?>
<div class="box-body table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($rows = mysqli_fetch_array($obj)){
            ?>
            <tr>
                <td></td>
                <td><?=$rows[2]?></td>
                <td><?=$rows['email']?></td>
                <td><?=$rows[0]?></td>
                <td><button class="btn btn-danger btn-delUser" data="<?=$rows[0]?>">DEl</button></td>

            </tr>
    <?php }?>
        </tbody>
    </table>

</div>
<script>
$(".btn-delUser").click(function(){
    // alert($(this).attr("data"));
    var idDel =$(this).attr("data");
    var reqest =$.ajax({
        method:"POST",
        url:"./scripts/delUser.php",
        data:{id:idDel}
    });
    reqest.done(function(){
        $("#showUser").load("./scripts/showUser.php");
    });
});
</script>