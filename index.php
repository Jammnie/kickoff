<?php
$conn = mysqli_connect("localhost","root","dlwoals12","kickoff");
session_start();
 $user_id = $_SESSION['userid'];
 $login_stat = '';
 if($_SESSION['is_logged'] == 'YES'){
     $login_stat = '로그아웃';
 } else { 
    $login_stat = '로그인';
 }
?>

<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Kickoff</title>
    <link href="css\kickoff_css.css" rel="stylesheet" type="text/css">
    <link href="css\kickoff_landing.css" rel="stylesheet" type="text/css">
    <script src="js/prefixfree.min.js"></script>
    <script src="js/jquery.js"></script>
</head>
<body>
    <header class="header">
        <nav class="navi">
            <ul>
                <li><img ></li>
                <li><a href="index.php">KICKOFF</a></li>
                <li><a href="kickoff_searchpage_01.php">구장예약</a></li>
                <li><a href="kickoff_matchpage_01.php">매치찾기</a></li>
                <li><a href="kickoff_trainingpage_01.php">트레이닝</a></li>
                <li><a href="kickoff_myclubpage_01.php">My Club</a></li>
            </ul>
        </nav>

        <div class="User">
            <ul>
                <li class="login_user" style="{color: white;}"><?=$user_id?>님 안녕하세요</li>
                <li><a href="kickoff_signinpage_01.php">회원가입</a></li>
                <li name="btn_login"><a href="kickoff_loginpage_01.php"><?=$login_stat?></a></li>
            </ul>
        </div>
    </header>
    <div class="wrapper">
        <div calss="body">
            <div class="MainSearch" id="mainSearch" style="background-image: url(resources/images/MainSearch_Back.png)">
              <form action="kickoff_mainSearchProcess.php" method="post">
                <div class="MainSearch_Input_set">
                    <div class="SearchType">
                        <p class="mainsearchTitle">검색 유형</p>
                        <select class="SearchInput" id="searchTyonpe">
                            <option value="court">구장검색</option>
                            <option value="match">팀매치</option>
                            <option value="team">팀찾기</option>
                            <option value="trainng">트레이닝</option>
                        </select>
                    </div>
                    <div class="GroundLocation">
                        <p class="mainsearchTitle">구장지역</p>
                        <select  class="SearchInput">
                            <option value="seoul">서울</option>
                            <option value="kyungki">경기</option>
                        </select>
                    </div>
                    <div class="ReserveDate">
                        <p class="mainsearchTitle">이용날짜</p>
                        <label><input type="date"  class="SearchInput"></label>
                    </div>
                    <div class="StartTime">
                        <p class="mainsearchTitle">시작시간</p>
                        <select class="SearchInput">
                            <script>
                                startTime = "";
                                for(i=0;i<24;i++){
                                    document.write("<option>"+i+":00"+"</option>");
                                }
                            </script>
                        </select>
                    </div>
                    <div class="EndTime">
                        <p class="mainsearchTitle">종료시간</p>
                        <select class="SearchInput">
                            <script>
                                startTime = "";
                                for(i=0;i<24;i++){
                                    document.write("<option>"+i+1+":00"+"</option>");
                                }
                            </script>
                        </select>
                    </div>
                    <div class="Search">
                        <input type="submit" class="Btn_Search" value="검색"></button>
                    </div>
                </div>
              </form>
            </div>
            <div class="content_area">
                <div class="ThemeSearch">
                    <ul id="themeSearch_list">
                        <li class="ThemeView">
                            <img class="ThemeImage" >
                        </li>
                        <li class="ThemeView">
                            <img class="ThemeImage">
                        </li>
                        <li class="ThemeView">
                            <img class="ThemeImage">
                        </li>
                        <li class="ThemeView">
                            <img class="ThemeImage">
                        </li>
                        <li class="ThemeView">
                            <img class="ThemeImage">
                        </li>
                        <li class="ThemeView">
                            <img class="ThemeImage">
                        </li>
                        <li class="ThemeView">
                            <img class="ThemeImage">
                        </li>
                    </ul>
                </div>
                <div Class="CourtSearch">
                    <div class="SearchTitle">
                        <h2>가장가까운 구장을 만나보세요.</h2>
                        <P>가까운 구장의 평균 점수는 4.5개입니다.</P>
                    </div>
                    <?php
                    $groundNum = 1;
 
                    $sql = "SELECT*FROM ground_infomations WHERE ground_index = $groundNum";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <div class="SearchContent">
                        <section class="CourtView" >
                            <a href="kickoff_groundIntro_01.php?groundid=<?=$groundNum?>">
                                <div class="CourtImage"></div>
                                <h2><?=$row['ground_name']?></h2>
                                <p><?=$row['ground_adress']?></p>
                                <div>
                                    <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                    <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                    <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                    <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                    <img class="starScore" src="resources/images/LikeStar_Unchecked.png">
                                </div>
                            </a>
                        </section>
                        <section class="CourtView">
                            <div class="CourtImage"></div>
                            <h2>풋살장이름</h2>
                            <p>풋살장주소<br>상세주소</p>
                            <div>
                                <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                <img class="starScore" src="resources/images/LikeStar_Unchecked.png">
                            </div>
                        </section>
                        <section class="CourtView">
                        <div class="CourtImage"></div>
                            <h2>풋살장이름</h2>
                            <p>풋살장주소<br>상세주소</p>
                            <div>
                                <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                <img class="starScore" src="resources/images/LikeStar_Unchecked.png">
                            </div>
                        </section>
                        <section class="CourtView">
                        <div class="CourtImage"></div>
                            <h2>더보기</h2>
                            <p>더보기<br>상세주소</p>
                            <div>
                                <img class="starScore" src="resources/images/LikeStar_Checked.png" >
                                <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                <img class="starScore" src="resources/images/LikeStar_Checked.png">
                                <img class="starScore" src="resources/images/LikeStar_Unchecked.png">
                            </div>
                        </section>
                    </div>
                </div>
                <div Class="TrainingSearch">
                    <div class="SearchTitle">
                        <h2>오늘의 트레이닝을 알아보세요.</h2>
                        <P>실력을 향상시킬수 있을꺼에요.</P>
                    </div>

                    <div class="SearchContent_t">
                        <section class="TrainingView">
                            <img class="CourtImage">
                            <h2>트레이닝 이름</h2>
                            <p>트레이닝 소개</p>
                        </section>
                        <section class="TrainingView">
                            <img class="CourtImage">
                            <h2>트레이닝 이름</h2>
                            <p>트레이닝 소개</p>
                        </section>
                        <section class="TrainingView">
                            <img class="CourtImage">
                            <h2>트레이닝 이름</h2>
                            <p>트레이닝 소개</p>
                        </section>
                        <section class="TrainingView">
                            <img class="CourtImage">
                            <h2>더보기</h2>
                            <p>더보기</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">

    </footer>


    <script>
        $(function(){
            $(".CourtView").css({"margin":"0 0 0 20px", "width":"295px"});

            $(".SearchContent section:first").css({"margin":"0 0 0 0px", "width":"295px"});

            $(".SearchContent_t section:first").css({"margin":"0 0 0 0px", "width":"295px"});
        });
    </script>
</body>
</html>
