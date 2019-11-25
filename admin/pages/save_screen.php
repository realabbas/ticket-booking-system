<?php
    $p = "INSERT INTO tbl_movie (ticket_id, t_id, ticket_name, cast, desc, match_date, image, video_url, status) VALUES
    (1, 3, 'Sakhav', 'Nivin', 'This story revolves around a student political leader who fights for his left-wing ideals. When some people try to use him in order to fulfill their intentions, he is forced to fight for his ideals.', '2018-01-01', 'images/maxresdefault.jpg', 'https://www.youtube.com/watch?v=x_AK7HWpJ-0', 0),
    (2, 3, 'Comarade In America', 'Dulquer Salmaan', 'Aji Mathew is a lovable, courageous, and modest youngster who hails from Pala. He meets a girl named Sara at college, and they fall in love regardless of their upbringing.', '2017-05-05', 'images/cia-new-poster-759.jpeg', 'https://www.youtube.com/watch?v=f5nvCp0QFdA', 0),
    (3, 3, 'Angamaly Diaries', ' Reshma Rajan, Tito Wilson, Sarath Kumar', 'Angamaly Diaries is a 2017 Indian Malayalam-language crime drama film directed by Lijo Jose Pellissery and written by Chemban Vinod Jose.', '2017-05-01', 'images/angamaly-diaries-2.jpg', 'https://www.youtube.com/watch?v=4yRBJCrjabU', 0),
    (8, 3, 'Godha', 'Tovino Thomas, Wamiqa Gabbi ', 'Godha is an Malayalam Sports-Comedy movie directed by Basil Joseph, starring Tovino Thomas, Wamiqa Gabbi and Renji Panicker in the lead roles', '2017-05-19', 'images/godha.jpg', 'https://www.youtube.com/watch?v=hnICGugY6fI', 0),
    (10, 3, 'Ramante Edanthottam', 'Kunchacko Boban, Anu Sithara', 'Ramante Edanthottam is an upcoming Malayalam language film written produced and directed by Ranjith Shankar.', '2017-05-12', 'images/raman.jpg', 'https://www.youtube.com/watch?v=H6HK51qVdmc', 0)";
    include('../../config.php');
    extract($_POST);
    mysqli_query($con,"insert into tbl_screens values(NULL,'$theatre','$name','$seats','$charge')");
?>