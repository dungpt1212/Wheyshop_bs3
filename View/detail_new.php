<?php
    if(isset($_GET["idnews"])){
      $idnews = $_GET["idnews"];
    }
    $sql= "select* from tbl_news_detail inner join tbl_news_group on tbl_news_detail.IdNewsGroup = tbl_news_group.IdNewsGroup where IdNews = $idnews";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>


<div id="detail_new"> <!-- detail_new start -->
        <div class="container">
        <div class="row"> 
          <div id="detail_new_left"> <!-- detail_new_left start -->
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
              <h5><a href="#">Tin tức thể hình/</a><a href="#"><?php echo($row["NameNewsGroup"]) ?></a></h5>
              <h3><?php echo($row["Title"]) ?></h3>
              <img src="upload/<?php echo($row["UrlImage"]) ?>" style="" class="thumbnail">
              <h4>Steroid là gì ? Tác dụng phụ của thuốc steroid mà ít người biết ? Tác dụng phụ và rủi ro sức khỏe khi sử dụng và sau khi sử dụng trong tập gym , thể hình </h4>
              <p>Steroid đồng hóa được phát minh để sử dụng cho một số điều kiện y tế nhất định dưới quy định của pháp luật, nhưng mọi người cũng sử dụng chúng bất hợp pháp trong quá trình thể thao. Họ sử dụng Steroid đồng hóa để tăng cường khối lượng cơ bắp, hiệu suất, độ bền và rút ngắn thời gian hồi phục giữa các bài tập.<br>

              Các loại thuốc này có nguồn gốc không tự nhiên từ testosterone nội tiết tố nam chính. Testosterone có vai trò quan trọng trong việc thúc đẩy và duy trì sự phát triển cơ bắp và phát triển các đặc điểm sinh dục nam thứ cấp, chẳng hạn như giọng nói sâu và tóc trên khuôn mặt.<br>

              <b>Steroid đồng hóa, còn được gọi là Anabolic Androgenic Steroid (AASs), có thể xây dựng cơ bắp và cải thiện hiệu suất thể thao, nhưng chúng cũng có thể có tác dụng phụ đáng kể, đặc biệt là khi được sử dụng không chính xác.</b><br>
              
               </p>
               <img src="upload/img_kimtiem.jpg" alt="" style="">
               <p>Sử dụng lâu dài, phi y tế có liên quan dẫn đến các vấn đề về tim, thay đổi thể chất không mong muốn và gây hấn, hung hăng. Ngày càng có nhiều mối quan tâm trên toàn thế giới về việc sử dụng steroid và các tác dụng của steroid không dùng trong y tế.<br>

                  Sự kiện nhanh về steroid đồng hóa :<br>
                  Steroid đôi khi được sử dụng trong y học, nhưng việc sử dụng trái phép AAS có thể dùng liều cao gấp 10 đến 100 lần so với liều theo toa thông thường theo chỉ định bác sĩ. Tại Hoa Kỳ, AAS cần một toa thuốc để sử dụng, nhưng đây không phải là trường hợp ở nhiều quốc gia.<br>

                  Tất cả các steroid tổng hợp kết hợp các hiệu ứng xây dựng cơ bắp với sự phát triển của đặc điểm sinh dục nam thứ cấp<br>
                  Việc sử dụng AAS có liên quan đến nguy cơ đau tim hoặc đột quỵ cao hơn.<br>

                  Steroid đồng hóa là gì?<br>

                  <b>AAS là các phiên bản tổng hợp của hormone nam – testosterone. Chúng ảnh hưởng đến nhiều bộ phận của cơ thể, bao gồm các cơ, xương, nang tóc, gan, thận, máu, hệ thống miễn dịch, hệ thống sinh sản và hệ thần kinh trung ương<br>
                  Trong tuổi dậy thì, tăng nồng độ testosterone cho phép sự phát triển của các đặc điểm như tăng trưởng tóc và cơ thể, tăng chiều cao và khối lượng cơ, một giọng nói sâu sắc hơn, và tình dục.</b><br>

                  Testosterone cũng có thể góp phần vào khả năng cạnh tranh, lòng tự trọng, và tính hung hăng.<br>

                  Mọi người sử dụng chúng như thế nào<br>
                  Việc sử dụng liên tục các AAS có thể dẫn đến các vấn đề vượt quá giới hạn. Họ thậm chí có thể làm cho cơ thể ngừng sản xuất testosterone tự nhiên của mình. Và khả năng phục hồi lại lượng testosterone tự nhiên sau khi ngưng sử dụng AAS là rất khó.<br>

                  Một số người sử dụng AAS liên tục, nhưng những người khác cố gắng giảm thiểu tác dụng phụ có thể có của họ thông qua các phương pháp sử dụng khác nhau :<br>

                  Theo chu kỳ : Người này sử dụng AAS trong chu kỳ 6 đến 12 tuần (được gọi là giai đoạn “bật”), sau đó là 4 tuần đến vài tháng nghỉ.<br>
                  Xếp chồng: Người dùng kết hợp nhiều loại steroid khác nhau hoặc kết hợp các chất bổ sung khác nhằm cố gắng tối đa hóa hiệu quả của steroid. Điều này được gọi là “xếp chồng”.
                  Kim tự tháp: Một số người dùng dần dần tăng liều lên mức cao nhất, sau đó giảm số lượng.
                  Tuy nhiên, không có nghiên cứu hay bằng chứng nào cho thấy những phương pháp này làm giảm rủi ro.
                  Các loại Steroid đồng hóa :<br>

                  Có tới 32 loại anabolic steroid được liệt kê trên các trang web thương mại.<br>

                  Một số chỉ sử dụng thuốc, chẳng hạn như Nebido. Anadrol là một ví dụ của một steroid với cả thuốc và hiệu suất sử dụng.<br>

                  Mọi người chọn các loại khác nhau cho các mục đích khác nhau:<br>

                  bulking steroid để xây dựng cơ bắp<br>
                  performance steroid cho sức mạnh và độ bền<br>
                  cutting steroid để đốt cháy chất béo<br>
                  Các lý do khác để sử dụng bao gồm chữa bệnh và phục hồi và tăng cường trao đổi chất.<br>
                  Đối với cả mục đích y tế và bất hợp pháp, AAS có thể được sử dụng :<br>

                  uống bằng miệng<br>
                  như viên nén cấy dưới da<br>
                  bằng cách tiêm<br>
                  qua da như kem hoặc gel<br>
                  AAS đi qua dòng máu đến mô cơ, nơi chúng liên kết với một thụ thể androgen. Loại thuốc này sau đó có thể tương tác với DNA của tế bào và kích thích quá trình tổng hợp protein thúc đẩy sự phát triển của tế bào.<br>

                  Sử dụng trong Y tế :<br>

                  <b>Một số loại steroid thường được sử dụng để điều trị y tế.
                  Ví dụ, corticosteroid có thể giúp những người bị hen suyễn thở trong mỗi cơn bệnh.</b><br>

                  Testosterone cũng được quy định đối với một số bệnh liên quan đến hormone, chẳng hạn như hypogonadism.<br>

                  Tuy nhiên, AASs thường không được quy định như một thuốc điều trị<br>
                  Tại Hoa Kỳ, AAS là chất được kiểm soát theo lịch trình III chỉ có sẵn theo đơn thuốc. Việc sử dụng các loại thuốc này chỉ là hợp pháp khi được nhà cung cấp dịch vụ y tế quy định<br>
                  Các điều kiện y tế mà chúng được sử dụng để điều trị bao gồm:<br>

                  chậm tuổi dậy thì
                  điều kiện dẫn đến mất cơ, chẳng hạn như ung thư và giai đoạn 3 HIV, hoặc AIDS
                  Testosterone và một số este của nó, cũng như methyltestosterone, nandrolone decanoate, và oxandrolone, là những chất anabolic androgenic chính hiện đang được quy định tại Hoa Kỳ.

                  Steroid trong thể thao

                  Việc sử dụng steroid phi y tế không được phép tại Hoa Kỳ Theo Đạo luật về Chất được kiểm soát, việc sở hữu và phân phối bất hợp pháp phải tuân thủ luật pháp liên bang và tiểu bang.

                  Vì nó không phải là hợp pháp cho các mục đích thể thao, không có kiểm soát pháp lý về chất lượng hoặc sử dụng ma túy được bán cho mục đích này.

                  Tại Việt Nam thì việc sử dụng steroid chưa được quản lý nghiêm ngặt và chặt như vậy. Việc bán steroid đồng hóa cũng diễn ra rất nhiêu và công khai trên các trang mạng xã hội với nguồn gốc không rõ ràng.<br>

                  Steroid bất hợp pháp thu được thông qua internet và thông qua các đại lý không chính thức, giống như các loại thuốc bất hợp pháp khác. Tuy nhiên, chúng cũng có thể có sẵn thông qua các dược sĩ, bác sĩ và bác sĩ thú y vô đạo đức.

                  Đôi khi, các steroid “thiết kế” được tạo ra để cho phép các vận động viên vượt qua các thử nghiệm doping. Thành phần và sử dụng của chúng hoàn toàn không được kiểm soát, thêm vào các mối nguy hiểm mà chúng gây ra.

                  Tác dụng phụ của thuốc steroids đối với người tập gym thể hình :
                  Các tác động bất lợi của việc sử dụng AAS phụ thuộc vào sản phẩm, độ tuổi và giới tính của người sử dụng, mức độ sử dụng của chúng, và trong bao lâu.

                  Các steroid đồng hóa liều bình thường theo quy định hợp pháp có thể có các tác dụng phụ sau đây:<br>

                  tăng mụn trứng cá
                  tích nước nhiều hơn
                  khó khăn hoặc đau khi đi tiểu
                  ngực nam to, được gọi là gynecomastia
                  số lượng tế bào hồng cầu tăng
                  mức cholesterol HDL “tốt” giảm và mức cholesterol LDL “xấu” tăng
                  tăng trưởng hoặc mất tóc
                  số lượng tinh trùng thấp và vô sinh
                  làm giảm ham muốn tình dục
                  Người dùng sẽ cần theo dõi và thực hiện các xét nghiệm máu định kỳ để theo dõi các tác dụng không mong muốn.

                  Sử dụng steroid không chính xác, quà liều có thể dẫn đến tăng nguy cơ:<br>

                  vấn đề tim mạch
                  đột tử do tim và nhồi máu cơ tim
                  vấn đề về gan, bao gồm các khối u và các loại tổn thương khác
                  đứt gân, do thoái hóa collagen
                  loãng xương và mất xương, như sử dụng steroid ảnh hưởng đến sự trao đổi chất của canxi và vitamin D
                  Ở thanh thiếu niên việc sử dụng steroid quá sớm có thể dẫn đến :

                  tăng trưởng chậm còi cọc<br>
                  Ở nam giới, có thể có:
                  tinh hoàn co rút
                  vô sinh
                  ngực to
                  Phụ nữ có thể 
                  thay đổi chu kỳ kinh nguyệt
                  làm trầm thêm giọng nói
                  làm rộng âm đạo
                  tăng cường lông và tóc
                  co ngực
                  tăng ham muốn tình dục
                  Một số thay đổi này có thể là vĩnh viễn, ngay cả sau khi ngừng sử dụng.

                  Ngoài ra còn có nguy cơ:

                  tổn thương gan
                  sự hung hăng và cảm giác thù địch
                  rối loạn tâm trạng và lo lắng
                  hành vi liều lĩnh
                  phụ thuộc tâm lý và nghiện
                  Những người đột nhiên ngừng AAS sau khi sử dụng chúng trong một thời gian dài có thể gặp phải các triệu chứng cai nghiện, bao gồm trầm cảm nặng.
                </p>
                <img src="upload/img_detail_new_left.jpg" style="">
                <p>Rủi ro về sức khỏe khi sử dung steroids <br>

                    Ngoài những tác dụng phụ này, còn có những rủi ro khác về sức khỏe.

                    Dùng chung kim tiêm để tiêm steroid làm tăng nguy cơ mắc bệnh hoặc lây truyền các bệnh truyền nhiễm do máu, chẳng hạn như viêm gan hoặc HIV.

                    Việc sử dụng các sản phẩm không có giấy phép mang một nguy cơ ngộ độc.

                    Và đặc biệt việc mua bán sử dụng steroid tại Việt Nam không có bất kỳ công ty nào cấp phép hoàn toàn bạn có thể mua phải những hàng nhái, hàng giả.

                    Các triệu chứng tâm thần có thể phát triển ở những người sử dụng steroid trong một thời gian dài.

                    Bao gồm:

                    thay đổi tâm trạng nghiêm trọng<br>
                    hoang tưởng và ảo tưởng
                    cảm giác bất khả chiến bại
                    giận dữ – được gọi là “cơn thịnh nộ roid” – có thể dẫn đến bạo lực, hành động thiếu kiểm soát.
                    Những tác động cực đoan và không mong muốn này có thể ảnh hưởng đến những người đã dễ bị những loại hành vi này.

                    Việc sử dụng AAS dài hạn, không được kiểm soát có thể ảnh hưởng đến một số con đường và hóa chất não bị ảnh hưởng bởi các loại thuốc khác, chẳng hạn như thuốc phiện. Điều này có thể dẫn đến sự phụ thuộc và có thể nghiện đối với AAS

                    Ngưng sử dụng steroid đồng hóa

                    Việc lạm dụng steroid có thể dẫn đến các triệu chứng khi người đó ngừng dùng thuốc.

                    Các triệu chứng sau khi ngưng sử dụng bao gồm:<br>

                    mệt mỏi
                    sự bồn chồn
                    tâm trạng lâng lâng
                    Phiền muộn
                    mệt mỏi
                    mất ngủ
                    giảm ham muốn tình dục
                    sự thèm ăn
                    Bước đầu tiên trong điều trị lạm dụng steroid đồng hóa là ngừng sử dụng và tìm kiếm trợ giúp y tế để giải quyết bất kỳ triệu chứng tâm thần hoặc thể chất nào có thể xảy ra.

                    Mong rằng qua bài viết này, các bạn đã tìm hiểu được thêm về steroid và các tác hại của steroid .</p>
            </div>
          </div> <!-- detail_new_left begin -->
          <div class="detail_new_right desktop">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <h3>Chuyên mục</h3>
              <ul class="list-group">
                <?php 
                  $sql= "select* from tbl_news_group ";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result)){
                    $id=$row['IdNewsGroup'];
                    $sql1= "select count(*) as sl from tbl_news_detail where IdNewsGroup = '$id'";
                    $result1 = mysqli_query($conn, $sql1);
                    $row1 = mysqli_fetch_array($result1)
                ?>
                <a href="index.php?page=group_new&&id_news_group=<?php echo($id) ?>"><li class="list-group-item"><?php echo($row["NameNewsGroup"]) ?>(<?php echo($row1["sl"]) ?>)</li></a>
              <?php } ?>
                
                
                
              </ul>
              <img src="upload/left_image_ad.jpg"  class="img-responsive" style="margin-bottom: 10px">
              <img src="upload/left_image_ad_2.jpg" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
      </div> <!-- detail_new begin -->