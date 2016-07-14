<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <style media="screen">
            div{
                display: inline-block;
                color: red;
                margin-left: 3px;
            }
        </style>
    </head>
    <body>
        <?php

            // $num = 10;
            // for ($i=1; $i <= $num; $i++) {
            //     //倒着的三角形
            //     for ($a=$num; $a >= $i; $a--) {
            //         echo "&nbsp";
            //     }
            //     //正着的三角
            //     for ($b=1; $b <=($i-1)*2+1 ; $b++) {
            //         echo " *";
            //     }
            //     echo "<br />";
            // }
            // echo "<hr>";
            // 没用的

            // $num = 19;
            // for ($i=1; $i <= $num; $i++) {
            //     //倒着的三角形
            //     for ($a=$num; $a >= $i; $a--) {
            //         echo "&nbsp";
            //     }
            //     //正着的三角
            //     for ($b=1; $b <=($i-1)*2+1 ; $b++) {
            //         //判定输出
            //         if (1 < $b && $b <(($i-1)*2+1)) {
            //             echo " *";
            //         }else {
            //             echo "<div>"."*"."</div>";
            //         }
            //     }
            //     echo "<br />";
            // }
            // for ($c=2; $c <= $num; $c++) {
            //     for ($d=1; $d <= $c; $d++) {
            //         echo "&nbsp";
            //     }
            //     for ($e = 1; $e <= ($num-$c)*2+1 ; $e++) {
            //         if ($e > 1 && $e<(($num-$c)*2+1)) {
            //             echo " *";
            //         }else {
            //         echo "<div>"."*"."</div>";
            //         };
            //     }
            //     echo "<br />";
            // }


            //实验
            //
            // $num =11;
            // for ($i=1; $i <= $num; $i++) {
            //     //倒着的三角形
            //     for ($a=$num; $a >= $i; $a--) {
            //         echo "&nbsp";
            //     }
            //     //正着的三角
            //     // for ($b=1; $b <=($i-1)*2+1 ; $b++) {
            //     for ($b=1; $b <=$i*2-1 ; $b++) {
            //         //判定输出
            //         if (1 < $b && $b <(($i-1)*2+1)) {
            //             echo " *";
            //         }else {
            //             echo "<div>"."*"."</div>";
            //         }
            //     }
            //     echo "<br />";
            // }
            // for ($c=2; $c <= $num; $c++) {
            //     for ($d=1; $d <= $c; $d++) {
            //         echo "&nbsp";
            //     }
            //     for ($e = 1; $e <= ($num-$c)*2+1 ; $e++) {
            //         if ($e > 1 && $e<(($num-$c)*2+1)) {
            //             echo " *";
            //         }else {
            //         echo "<div>"."*"."</div>";
            //         };
            //     }
            //     echo "<br />";
            // }



            function hangshu($bum){
                $num =$bum;
                for ($i=1; $i <= $num; $i++) {
                    //倒着的三角形
                    for ($a=$num; $a >= $i; $a--) {
                        echo "&nbsp";
                    }
                    //正着的三角
                    // for ($b=1; $b <=($i-1)*2+1 ; $b++) {
                    for ($b=1; $b <=$i*2-1 ; $b++) {
                        //判定输出
                        if (1 < $b && $b <(($i-1)*2+1)) {
                            echo " *";
                        }else {
                            echo "<div>"."*"."</div>";
                        }
                    }
                    echo "<br />";
                }
                for ($c=2; $c <= $num; $c++) {
                    for ($d=1; $d <= $c; $d++) {
                        echo "&nbsp";
                    }
                    for ($e = 1; $e <= ($num-$c)*2+1 ; $e++) {
                        if ($e > 1 && $e<(($num-$c)*2+1)) {
                            echo " *";
                        }else {
                        echo "<div>"."*"."</div>";
                        };
                    }
                    echo "<br />";
                }
            }
            hangshu(40);
         ?>
    </body>
</html>
