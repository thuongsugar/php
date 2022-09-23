<?php
$sex = array(0 => "Nam", 1 => "Nữ");
$spec = array("MAT" => "Khoa học máy tính", "KDL" => "Khoa học vật liệu");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    p {
        margin: 0;
    }

    .wrapper {
        display: flex;
        flex-direction: column;
        width: 50%;
        margin: auto;
        margin-top: 200px;
        padding: 50px 100px;
        /* background-color: #999;
         */
        border: solid 2px #007bc7;
    }

    .form-item {
        font-size: 18px;
        width: 100%;
        display: flex;
        margin-bottom: 12px;
    }

    .form-item p {
        width: 15%;
        padding: 12px 10px 5px 10px;
        border: solid 2px #007bc7;
        background-color: #4ba3ff;
        margin-right: 15px;
        color: white;
        text-align: center;
    }

    input[type="text"] {
        width: 50%;
        border: solid 2px #007bc7;
        outline: none;
    }

    input[type="radio"] {
        margin-right: 12px;
    }

    .sex {
        display: flex;
        align-items: center;
        margin-left: 10px;
    }

    select {
        border: solid 2px #007bc7;
        outline: none;
    }

    .submit-wrapper {
        justify-content: center;
        margin-top: 45px;
    }

    input[type="submit"] {
        padding: 12px 30px;
        background-color: #39bc64;
        border-radius: 10px;
        border: solid 2px #007bc7;
        cursor: pointer;
        color: white;
        font-size: 17px;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <form>
            <div class="form-item">
                <p>Họ và tên</p>
                <input required name="name" type="text">
            </div>
            <div class="form-item">
                <p>Giới tính</p>
                <div class="sex">
                    <?php foreach ($sex as $key => $value) : ?>
                    <label for=<?= $key ?>>
                        <?= $value; ?>
                    </label>
                    <input required id=<?= $key ?> type="radio" name="sex" value=<?= $key ?>>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="form-item">
                <p>
                    <label for="spec">
                        Phân khoa
                    </label>
                </p>
                <select required name="spec" id="spec">
                    <option disabled selected value></option>
                    <?php foreach ($spec as $key => $value) : ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-item submit-wrapper">
                <input type="submit" value="Đăng Kí">
            </div>
        </form>
    </div>
</body>

</html>