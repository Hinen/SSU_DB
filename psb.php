<?php
    $userID = $_POST['userID'];
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>20192762 박수빈</title>

        <style>
            .grayBar {
                width: 700px;
                height: 50px;
                background-color: lightgray;
            }
        </style>
    </head>
    <body>
        <div align="center">
            <table>
                <td class="grayBar">
                    <p><b>
                        <?php
                            echo "사용자등록 종료- " . $userID;
                        ?>
                    </b></p>
                </td>
            </table>

            <table>
                <td width="700px">
                    <p>아래와 같은 정보를 가진 사용자로 등록되었습니다. 비밀번호와 아이디는 반드시 기억해 주시기 바랍니다. 아이디와 비밀번호 분실시 검색은 거의 불가능합니다. ^^;; 등록후 정보의 변경은 로그인을 하신후 변경하시기 바랍니다.</p>
                    <p>
                    <ul>
                        <?php
                        echo "사용자ID :" . $userID . "<br>";
                        echo "사용자명 :" . $userName . "<br>";
                        echo "비밀번호 :" . $userPassword . "<br>";
                        ?>
                    </ul>
                    </p>
                </td>
            </table>

            <table>
                <td class="grayBar"></td>
            </table>
        </div>
    </body>
</html>