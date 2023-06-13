<?php session_start();?>
<?php $connect = new MySQLi('localhost:3306','root', 'root', 'thuvien1');?>
<div>
    <div>
        <p>ten người</p>
        <?php


if(isset($_POST['username'])){
    $query="select * from person where status=1 and MSV  like '%".$_POST['username']."%' ";//name chua tu khoa day(like)
    $result=$connect->query($query);
    $result=mysqli_fetch_array($result); 
    $_SESSION['name']=$result['name'];
    $_SESSION['idPerson']=$result['id'];
    $_SESSION['MSV']=$result['MSV'];
    
    
}   
?>

        <section>
            <form method="post">
                <input style="border-radius: 100px; width:80%; height: 40px; font-size: 27px;" type="search"
                    name="username"><input type="submit" name="search" value="search">
            </form>
        </section>

        <p><?=$_SESSION['MSV'];?></p>
        <p><?=$_SESSION['name']?></p>


        <section>
            <a href="sach.php">NEXT</a>
        </section>
        </form>
    </div>
</div>