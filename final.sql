-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 16, 2020 lúc 04:42 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `MaMH` varchar(30) CHARACTER SET utf8 NOT NULL,
  `TenMH` varchar(200) CHARACTER SET utf8 NOT NULL,
  `TieuDe` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `LinkAnh` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `LinkREF` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaMH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `document`
--

INSERT INTO `document` (`MaMH`, `TenMH`, `TieuDe`, `NoiDung`, `LinkAnh`, `LinkREF`) VALUES
('JS1', 'FRONT-END', 'Khóa học Java Script tại Unica', 'Như các bạn biết khi học lập trình web nói chung và học về lập trình frontend nói riêng thì bắt buộc bạn phải học javascript, một website thiếu Javascript thì sẽ trở nên cọc cằn, chức năng không đẹp và không thân thiện với người dùng. vì vậy nếu bạn không học JS thì đó quả là một sai lầm và lạc hậu về công nghệ.\r\n\r\n- Javascript đã trở thành ngôn ngữ lập trình lên ngôi (nhờ khả năng biến hóa linh hoạt, mềm dẻo của nó) -nó xử lý cực mạnh các hiệu ứng web chuyển động vì vậy đến với khóa học tại Fedu học viên có thể viết được các thư viện javascript cho website thay cho các thư viện có sẵn là jquery đang sử dụng.\r\n\r\n-  Khóa họcJavascript là series tổng hợp các thủ thuật khi lập trình với Javascript, các thủ thuật này cũng có thể coi là các mẹo nhỏ giúp bạn xử lý code ngắn gọn và tối ưu hơn.\r\n\r\n- Javascript là nền tảng rất rộng để có thể cùng một lúc nắm được hết khía cạnh của nó, nếu các bạn đi học offline tại các trung tâm khác phần module này sẽ khiến bạn mất ít nhất 1 – 2 tháng mới có thể hoàn thành khóa học, Nhưng với khóa học lập trình Javascript đã tổng hợp lại kiến thức trong quá trình làm việc, và các giáo trình chuẩn quốc tế từ các nước như Mỹ, Úc, Ấn Độ bạn sẽ nắm rõ Javascript trong lòng bàn tay chỉ trong vòng 2-3 tuần học.\r\n\r\n- Với rất nhiều bài tập thực hành thực tế, chi tiết các hiệu ứng từ các website nổi tiếng như kenh14, facebook để lập trình các chức năng tương tác với frontendví dụ : giỏ hàng, các tính năng view ảnh, notification trên facebook.', 'https://static.unica.vn/upload/images/2019/06/hoc-lap-trinh-javacript_m_1561523648.jpg', 'https://shorten.asia/yaT62psq'),
('JS2', 'FRONT-END', 'Javascript nâng cao ES6', 'Năm vững kiến thức và các thông tin liên quan về React native.\r\nLàm quen với các công cụ: git, nodejs, yarn, Expo, xcode, android studio, AVD Manager…\r\nHiểu và làm việc được với với React Component.\r\nBiết cách lấy dữ liệu từ API.\r\nLàm quen với React native qua các bài tập thực hành thực tiễn.', 'https://media-kyna.cdn.vccloud.vn/uploads/courses/1546/img/image_url-1569401866.cover-263x147.png', 'https://shorten.asia/FrXXznAp'),
('MAR04', 'Marketing', 'Facebook Marketing từ A - Z', 'Khóa học Facebook Marketing là gì?\r\nFacebook hiện đang là mạng xã hội với lượng người dùng lên hơn 60.000.000 người tại Việt Nam, đứng thứ 7 trong số các quốc gia có số lượng người dùng Facebook cao nhất và ngày càng có chiều hướng gia tăng một cách chóng mặt.\r\n\r\nChính vì vậy, tất cả các nhãn hàng nổi tiếng mà bạn biết tên, thậm chí cả những nhãn hàng nhỏ, những shop thời trang trên phố lớn cho tới những quán ăn vỉa hè trong ngõ nhỏ đều xuất hiện rất nhiều trên Facebook, tiếp cận tới bạn và “giục” bạn nhanh chóng mua ngay.\r\n\r\nMột chợ thương mại phủ rộng toàn thế giới với tiềm năng \"khổng lồ\" như vậy,  tại sao bạn và doanh nghiệp của bạn có thể đứng ngoài “cuộc chơi lớn” với vô vàn cơ hội triệu đô từ người dùng?\r\n\r\nTham gia khóa học “Facebook Marketing từ A - Z” ngay hôm nay để nhanh chóng tiếp cận tới khách hàng và đưa doanh nghiệp của bạn lên đỉnh cao mới trên thương trường Facebook.\r\n\r\nKhóa học có gì dành cho bạn?\r\n\r\nChi tiết 7 dạng quảng cáo cơ bản trên Facebook và ứng dụng thông minh vào từng chiến dịch hiệu quả.\r\nChiến thuật xây dựng và phát triển Fanpage đỉnh cao phục vụ cho chạy Facebook Ads thành công.\r\nCách lên một chiến dịch Facebook Ads chuẩn.\r\nCách để đánh giá và tối ưu quảng cáo tốt nhất.\r\nCách để khai thác công cụ Remarketing Facebook tăng doanh số từ khách hàng cũ.\r\nHướng dẫn cách sử dụng các công cụ phân tích đo lường hiệu quả của Facebook Ads.\r\nTổng hợp thủ thuật và kinh nghiệm chạy Facebook hiệu quả, tránh và giải quyết được hầu hết các vấn đề tài khoản Facebook thường gặp phải trong quá trình chạy Facebook Ads.\r\nVới sự hướng dẫn chi tiết và dễ hiểu của giảng viên - chuyên gia Hồ Ngọc Cương, học viên sau khi hoàn thành khóa học hoàn toàn có thể đem về doanh thu “khủng” trên sân chơi Facebook vạn người với những chiến dịch quảng cáo hiệu quả nhất!\r\n\r\nHọc Facebook Marketing từ A- Z ngay hôm nay để nhận hàng ngàn ƯU ĐÃI từ Unica:\r\n\r\nMua khóa học 1 lần sở hữu TRỌN ĐỜI.\r\nHỌC ONLINE mọi lúc mọi nơi trên mọi thiết bị (điện thoại, laptop,pc).\r\nTƯ VẤN hỗ trợ 24/7 từ chuyên gia.\r\nĐược HOÀN TIỀN trong vòng 7 ngày nếu không hài lòng về khóa học.\r\nGiảm trực tiếp 10% CHI PHÍ khóa học khi thanh toán Online.\r\n', 'https://static.unica.vn/upload/images/2019/04/facebook-marketing-a-z_m_1555557477.jpg', 'https://shorten.asia/Fjt561ZP'),
('MAR05', 'Marketing', 'VUA EMAIL MARKETING', 'Email Marketing vẫn là công cụ hỗ trợ đắc lực cho những chiến lược Marketing.\r\n\r\nEmail Marketing giúp bạn xây dựng mối quan hệ, tạo dựng lòng tin và tăng khả năng nhận diện thương hiệu với khách hàng bằng cách cung cấp thông tin hữu ích.\r\n\r\nTuy nhiên để tiếp thị thành công và tăng doanh số kinh doanh bằng email là điều mà tất cả người làm chiến lược nào đều muốn nhưng không phải lúc nào cũng hiệu quả.\r\n\r\nĐể bạn luôn duy trì được những chiến dịch Email marketing thành công, mang đến cho bạn thêm nhiều khách hàng và bán được nhiều sản phẩm/dịch vụ  hơn nữa thì hãy đến với khóa học Vua Email Marketing của giảng viên Hán Quang Dự.\r\n\r\nKhóa học được giảng dạy theo một lộ trình bài giảng bản, chuyên nghiệp từ đơn giản đến nâng cao. Nó phù hợp cho những người nhập môn, chưa biết Marketing là gì. Tiếp đến, khi đã nắm được những điều cơ bản về Email Marketing, bạn được giảng viên hướng dẫn cách tạo chiến dịch, tối ưu hóa chiến dịch Email Marketing của mình.\r\n\r\nChỉ với 16 bài giảng cùng với cách truyền đạt dễ nhớ, dễ hình dung, khóa học \"Vua Email Marketing\" sẽ giúp bạn nắm được bản chất của Email Marketing. Từ đó, đưa ra những chiến lược kinh doanh bằng email giúp doanh nghiệp gia tăng doanh số, thêm nữa bạn còn được thực hành bằng công cụ Getresponse. Từ đó, bạn sẽ có được những bí quyết Email Marketing chuyên biệt để tạo dựng thành công.', 'https://static.unica.vn/upload/images/2019/04/Vua-email-marketing-han-quang-du_m_1555569804.jpg', 'https://shorten.asia/RUC3atnM'),
('HTML1', 'FRONT-END', 'Xây dựng Website Responsive với HTML5, CSS3', 'Responsive là một công nghệ dùng cho ngành thiết kế website, sử dụng để website phù hợp trên tất cả các kích thước màn hình từ một cơ sở dữ liệu và một layout gốc. Trước đây người thiết kế phải thiết kế 2 bản riêng biệt một cho màn hình máy tính và một cho màn hình thiết bị di động. Sự ra đời của Responsive là giải pháp tuyệt vời của vấn đề này, vẫn chỉ một bản thiết kế, người dùng có thể truy cập trên các thiết bị kích thước khác nhau với cùng địa chỉ URL, giao diện hiển thị vẫn giữ nguyên.\r\nBắt đầu từ năm 2015 công nghệ thiết kế website responsive đã trở thành xu hướng, được áp dụng phổ biến và nhận được nhiều phản hồi tích cực từ khách hàng sử dụng, giúp người đọc có thể dùng và tìm kiếm dễ dàng trên website.\r\nHiểu được điều đó, chúng tôi hợp tác cùng giảng viên có nhiều năm kinh nghiệm trong lĩnh vực lập trình Bùi Quang Trung mang đến cho bạn khóa học \"Xây dựng Website Responsive với HTML5, CSS3\"\r\nKhóa học bao gồm 14+ chương với 76+ bài học. Ở 8 chương đầu học viên sẽ được cung cấp kiến thức từ cơ bản đến nâng cao về xây dựng website responsive sử dung HTML5 và CSS3. Với 4 chương còn lại học viên sẽ cùng thầy thực hiện các project thực hành trực tiếp sử dụng các kiến thức đã được học để cho ra một sản phẩm demo hoàn chỉnh.\r\nThời lượng khóa học kéo dài hơn 12 giờ đồng hồ với kiến thức tổng hợp, đặc biệt có nhiều kỹ năng và kinh nghiệm kèm theo các bài tập thực hành lấy những ví dụ thực tế nhất, giúp bạn có thể áp dụng ngay kiến thức đã học để làm website cho riêng mình.\r\nBất kể mục đích lập trình của bạn là gì ( kiếm tiền, nâng cao kiến thức, master trong lập trình website ...), khoá học này đều có thể đáp ứng được cho bạn.', 'https://static.unica.vn/upload/images/2019/06/xay-dung-website-resposive-voi-html5-css3_m_1561369326.jpg', 'https://shorten.asia/4g4XBhbE'),
('HTML2', 'FRONT-END', 'Học HTML5/CSS3, BOOTSTRAP 4 và học cắt Web từ file thiết kế', 'Có phải bạn: \r\n\r\nBạn bắt đầu làm quen và biết đến cắt web, thiết kế website?\r\nBạn yêu thích những công việc đầy sáng tạo, ý tưởng mới lạ cắt, thiết kế web?\r\nCông việc của bạn đòi hỏi bạn cần biết bắt web, xử lý thông tin, trình bày các nội dung trên web?\r\nBạn cần học thêm những kiến thức cơ bản nhất về cắt, thiết kế  web để phục vụ cho công việc của mình, cũng như có thêm cơ hội thăng tiến, kiếm thêm thu nhập cho bản thân?\r\nBạn mới chỉ biết về cắt, thiết kế web chứ không thành thạo và biết các công cụ sử dụng trong cắt web?\r\nTất cả những khó khăn đó của bạn sẽ được giải quyết nhanh chóng, ngay lập tức khi bạn tham gia khóa. Khóa học sẽ giúp bạn cải thiện và nâng cao ngay lập tức trình độ cắt web, sử dụng công cụ tác nghiệp trên website. Đặc biệt, đây là khóa học dành cho những người mới bắt đầu, cơ bản từ con số 0 về thiết kế website.\r\n\r\nGiảng viên Nguyễn Đức Việt sẽ cùng với Học viên Online Unica.vn mang đến cho các bạn một khóa học “Học HTML5/CSS3, BOOTSTRAP 4 và học cắt Web từ file thiết kế” với 13 phần giúp các học viên biến những kỹ năng cắt web trở nên đơn giản vô cùng. Khóa học cung cấp cho học viên đầy đủ những kỹ năng cắt web từ cơ bản đến nâng cao. Trong quá trình học, học viên cũng được thực hành cắt web cụ thể trên các trang báo như: VnExpress, Dantri, Kenh14, Baomoi, Vietnamnet.vn,...\r\n\r\nCác bạn sẽ được rèn luyện thành thục tất cả các kỹ năng cắt web được sử dụng nhiều nhất hiện nay, sử dụng Bootstrap 4 - công cụ lập trình HTML Front End mới nhất đang được nhiều đơn vị web lựa chọn.  Cùng rất nhiều những tính năng cắt web tối ưu, đảm bảo sản phẩm đẹp các sử dụng font icon và làm các hiệu ứng hover trực tiếp trên web,...\r\n\r\nTrình độ cắt web của bạn sẽ được “nâng cấp” khiến bạn không khỏi bất ngờ. Bạn không chỉ thỏa mãn được đam mê của mình, thỏa sức sáng tạo với các hiệu ứng và kĩ năng cắt web, mà còn mở thêm nhiều cơ hội để thăng tiến trong công việc và thể hiện trình độ chuyên môn của mình.\r\n\r\nVậy còn chờ đợi gì nữa, đăng ký khóa học “Học HTML5/CSS3, BOOTSTRAP 4 và học cắt Web từ file thiết kế” của giảng viên Nguyễn Đức Việt ngay hôm nay trước khi hết chương trình ưu đãi khóa học tại Unica thôi!', 'https://static.unica.vn/uploads/images/doanhuyen209@gmail.com/HTL_m.jpg', 'https://shorten.asia/7tvTgVYQ'),
('MAR03', 'Marketing', 'Hướng dẫn làm web Landing Page bán hàng đỉnh cao dành cho người không chuyên', 'Bạn đam mê kinh doanh? Bạn mong muốn tự tay thiết kế, sở hữu, làm chủ một Website của chính mình để quảng cáo sản phẩm, bán hàng, hoặc xây dựng hình ảnh cá nhân?\r\n\r\nBạn đã lên mạng tìm kiếm hướng dẫn làm web , nhưng lại thiếu kiến thức Internet và thất bại?\r\n\r\nBạn mất quá nhiều thời gian và công sức để tạo lập một trang Web, bạn chán nản và quyết định đi thuê thiết kế Website. Nhưng…. vấn đề nối tiếp vấn đề….\r\n\r\nGiá thiết kế website quá đắt, từ 2 – 10 triệu cho một website thương mại với tính năng cơ bản.\r\nWebsite bị lỗi không biết nhờ ai sửa chữa, bạn sẽ mất doanh thu bán hàng nếu không khắc phục sớm.\r\nMuốn thay đổi một chút giao diện, tính năng website phải nhờ kỹ thuật và cũng phải chờ vài tuần.\r\nChỗ nào giá rẻ thì ít hỗ trợ tính năng bán hàng, Marketing.\r\nBạn bực bội và nói rằng “Nếu mình có chút kiến thức cơ bản về thiết kế website thì đã không gặp những trường hợp như vậy!”\r\n\r\nKhóa học \"Hướng dẫn làm web Landing Page bán hàng đỉnh cao dành cho người không chuyên\" cho người không chuyên được thiết kế đặc biệt dành cho những người không biết gì về lập trình, kỹ thuật internet... được hướng dẫn trực tiếp bởi Giảng viên Trương Văn Hòa sẽ giúp bạn tạo được cho mình những trang landing page bán hàng tuyệt đỉnh, gia tăng doanh số, học chưa xong web đã xong.\r\n\r\nKhóa học dành cho những người bình thường muốn làm lên những việc phi thường trên Internet.', 'https://static.unica.vn/upload/images/2019/04/hoc-lam-web-sieu-toc-cho-nguoi-khong-chuyen_m_1555658815.jpg', 'https://shorten.asia/h6g99PJY'),
('MAR02', 'Marketing', 'Học SEO từ A-Z', 'Chào các bạn Tôi là Henry Phước  CEO – Reachard – Cty chuyên về dịch vụ SEO từ khóa lên Top google\r\n\r\nTôi được nhiều người biết đến với những thành công về các keywords: Đào tạo Seo, Máy chiếu, thám tử, rút hầm cầu, thiết kế web.\r\n\r\nHơn thế nữa với sự hài hước + Sự tài trí thông minh dưới góc nhìn trình độ và kiến thức chuẩn đã được rất nhiều chủ doanh nghiệp mời làm tư vấn mảng Marketing Online: Công ty TNHH chế tác MICA DPP, Công ty TNHH máy chiếu Đức Pháp, Công ty TNHH Luật Hồng Đức,...\r\n\r\nTôi đã từng là giảng viên SEO cao cấp tại các trung tâm đào tạo SEO uy tín như INET và vinalink, Và hiện nay tôi bước tiếp 1 bước trên nghề giảng đó là trở thành giảng viên trường Đại Học công nghiệp TPHCM\r\n\r\nKhóa học \" Học SEO từ A-Z\"  của giảng viên Henry Phước sẽ mang đến cho bạn kiến thức về SEO từ cơ bản đến nâng cao. Hơn thế nữa khi đến với khóa học Seo này bạn bắt đầu được nhìn kiến thức về SEO một cách thực tế, có góc nhìn tổng quan về công ty của bạn và đối thủ của bạn nói riêng. Mang đến sự so sánh,tạo ra điểm khác biệt để bạn thành công. Vượt trội - Đẳng cấp so với đối thủ. Chiếm ưu thế về nhận định vượt trội về thứ hạng -> Tiếp cận được khách hàng tốt hơn! Mang về lợi nhuận kinh tế tốt cho chính bạn và tổ chức của bạn.\r\n', 'https://static.unica.vn/upload/images/2019/04/khoa-hoc-seo-online_m_1555575597.jpg', 'https://shorten.asia/9a4BtqcX'),
('CSS02', 'FRONT-END', 'Học lập trình Web - CSS3 cơ bản và nâng cao', 'HTML, CSS và JavaScript là bộ 3 ngôn ngữ bắt buộc cần phải thuần thục của một lập trình viên ứng dụng Web. Với bộ 3 ngôn ngữ này, một lập trình viên có thể thiết kế, xây dựng một ứng dụng Web từ đơn giản đến phức tạp. \r\n\r\nHọc lập trình Web - CSS3 cơ bản và nâng cao này sẽ cung cấp cho học viên những kiến thức cơ bản, cần thiết nhất để bắt đầu trên con đường trở thành một lập trình viên ứng dụng Web chuyên nghiệp. CSS là những kiến thức cơ bản cần trang bị trước khi tiếp cận với các công nghệ, nền tảng lập trình Web hiện đại như ASP.NET, PHP…', 'https://static.unica.vn/upload/images/2019/06/lap-trinh-web-css3_m_1561534375.jpg', 'https://shorten.asia/mjTbKYJG'),
('CN01', 'Tiếng Trung', 'Tự học tiếng Trung cơ bản', 'Bạn chưa học tiếng Trung và muốn học nhanh, bài bản?\r\nBạn không có thời gian cố định để đi học vào khung giờ cố định tại các trung tâm?\r\nBạn đã tiếp xúc với tiếng Trung một thời gian ngắn những chưa tự tin với việc phát âm hoặc phát âm sai?\r\nBạn đã học một thời gian nhưng vẫn chưa giao tiếp được hoặc vẫn nói sai ngữ pháp?                        \r\nBạn mong muốn trong thời gian ngắn nhất học tiếng Trung giao tiếp hiệu quả để phục vụ nhu cầu công việc, du lịch, sở thích...?\r\nHãy đến với Khóa học: Tự học tiếng Trung cơ bản để được truyền cảm hứng và chuẩn bị một hành trang ngôn ngữ vững vàng!\r\n\r\nKhóa học ra đời với mục đích giúp các bạn tiết kiệm được thời gian, công sức, tiền bạc, nhưng vẫn đảm bảo các bạn nắm vững và sử dụng tiếng Trung một cách thành thạo.\r\n\r\nBạn sẽ không phải mất thời gian đi lại để tham gia các khoá học tập trung hoặc đóng tiền học rồi mà vẫn phải lo lắng không biết giáo viên ở đó phát âm thế nào, dạy có dễ hiểu không, hiệu quả ra sao.\r\n\r\nKhóa học với những bài giảng được biên soạn tổng hợp tinh túy từ các giáo trình sử dụng phổ biến hiện nay, với những mẫu câu đối thoại ngắn gọn, xúc tích, những hình ảnh trực quan đơn giản, giúp tăng khả năng ghi nhớ chữ Hán, nắm vững ngữ pháp Tiếng Trung và biết cách sử dụng tiếng Trung nhanh hơn.\r\n\r\nVà điều quan trọng nhất là, chỉ với mức đầu tư vô cùng thấp, bạn đã có cơ hội để trở thành học viên thành công tiếp theo của Thanhmaihsk - một trung tâm tiếng Trung uy tín hàng đầu Hà Nội - TP Hồ Chí Minh hiện nay.', 'https://static.unica.vn/upload/images/2019/04/khoa-hoc-tu-hoc-tieng-trung-co-ban_m_1555570995.jpg', 'https://shorten.asia/UBc1sfRQ'),
('ENG05', 'ENGLISH', '5 Bí quyết giao tiếp tiếng Anh thành thạo chỉ sau một tháng', 'Tự ti,\r\n\r\nKhông xác định được mục tiêu học tập,\r\n\r\nChưa có phương pháp học tập hiệu quả...,\r\n\r\nChính là những rào cản khiến bạn không có hứng thú với việc học ngoại ngữ nói chung và tiếng Anh nói riêng, không thể giao tiếp tiếng Anh thành thạo.\r\n\r\nHãy đến với khóa học 5 Bí quyết giao tiếp tiếng Anh thành thạo chỉ sau một tháng tại Unica.vn.\r\n\r\nKhóa học sẽ hướng dẫn học viên vượt qua từng rào cản.\r\nHướng dẫn chi tiết 5 phương pháp hack độc đáo đã giúp hàng ngàn người giao tiêp Tiếng Anh thành thạo.\r\nCó 5 bí quyết mà khóa học sẽ đem đến cho bạn, hãy mở cánh cổng thành công:\r\nBí quyết số #1 - Tin tưởng chính mình.\r\nBí quyết số #2 - Mục tiêu rõ ràng.\r\nBí quyết số #3 - Chuẩn bị thật tốt.\r\nBí quyết số #4 - Phương pháp hiệu quả.\r\nBí quyết số #5 - Bắt đầu ngay bây giờ.\r\nKhóa học này rất đặc biệt, những phương pháp ghi nhớ này rất độc đáo. Nhưng không có gì bí ẩn cả. Nó chỉ là đánh thức tài năng đang ngủ quên trong chính bạn mà thôi. Sau khóa học, bạn sẽ có một khả năng giao tiếp Tiếng Anh tuyệt vời.', 'https://static.unica.vn/upload/images/2019/06/Khoa-hoc-bi-quyet-giao-tiep-tieng-anh-thanh-thao-chi-sau-mot-thang_m_1561426855.jpg', 'https://shorten.asia/rxxW316w'),
('ENG04', 'ENGLISH', 'Tiếng Anh cho người Việt - Season 2: Câu và tư duy cú pháp', 'Bạn có đầy đủ từ vựng nhưng không thể nào tạo ra câu đúng, câu hay\r\nBạn học từ Tiếng Anh chủ yếu biết nghĩa từ điển (từ chết) mà không biết cách học nghĩa qua văn cảnh trong câu (từ sống) dẫn đến không thể đưa ra sử dụng\r\nBạn gặp khó khăn (thậm chí bất lực) trong việc đọc hiểu một bài đọc do bị tắc nghẽn ở các từ mới.\r\nKhóa học Tiếng Anh cho người Việt - Season 2: Câu và tư duy cú pháp chỉ ra nguyên nhân căn bản mà người học Tiếng Anh hay mắc phải : thiếu hụt tư duy cú pháp và hướng dẫn cách khắc phục. Học ngữ pháp bằng chính tư duy của người bản địa khi tạo câu - Tư duy cú pháp.\r\n\r\nKhóa học lấy cú pháp (cách thức xây dựng câu) làm xuất phát điểm. Giống như việc xây nhà, sẽ bắt đầu bằng bản vẽ trước, sau đó mới nói đến vật liệu. Khóa học giúp người học trước hết có hình dung rõ ràng về cách người bản địa tạo ra một câu bất kỳ, bao gồm thành phần cấu tạo câu và các loại hình cụm cũng như các phương thức kết nối. Việc học từ pháp được thực hiện thông qua việc phân tích mổ xẻ 5 loại cụm trong tiếng Anh, với việc chỉ rõ cấu tạo, trật tự và mối quan hệ qua lại giữa các thành phần trong cụm.\r\n\r\nNhững bài hướng dẫn thực hành đi kèm khóa học giúp bạn dễ dàng nhận diện các loại hình câu, cụm, cũng như hướng dẫn kỹ thuật phân tích tính logic chặt chẽ trong việc tạo câu của người bản địa thông qua các bài đọc hiểu và các dạng bài tập ở mọi cấp độ, từ đọc báo thông thường, các dbài thi tốt nghiệp trung học phổ thông đến bài thi quốc tế.', 'https://static.unica.vn/upload/images/2019/05/tieng-anh-cho-nguoi-viet-season-2-ok_m_1558080732.jpg', 'https://shorten.asia/bm3VBPqe'),
('ENG03', 'ENGLISH', 'Tiếng Anh giao tiếp cho người mới bắt đầu', 'Bạn đang:\r\n\r\nMất gốc tiếng Anh và không biết nên học tiếng Anh như thế nào sao cho hiệu quả?\r\nHọc tiếng Anh đã lâu rồi nhưng chưa thể nói ra thành phản xạ các chủ đề thông dụng trong giao tiếp hàng ngày?\r\nBạn bối rối và không biết nói gì khi giao tiếp với người nước ngoài?\r\nMất tự tin khi sử dụng tiếng Anh trong học tập cũng như công việc hàng ngày?\r\nMuốn củng cố phản xạ giao tiếp bằng tiếng Anh đồng thời nâng cao khả năng phát âm và nắm vững vốn từ vựng, ngữ pháp cơ bản tiếng Anh?\r\nKhóa học Tiếng Anh giao tiếp cho người mới bắt đầu CỰC KỲ PHÙ HỢP với bạn. Vì sao?\r\n\r\nBởi vì khóa học này cung cấp cho bạn một cách đầy đủ và có hệ thống các bài học với các chủ để cực kỳ thông dụng trong cuộc sống hàng ngày.\r\n\r\nBạn sẽ gặp những tình huống giao tiếp thực tế đòi hỏi bạn cần phải có phản xạ giao tiếp tốt và sau khi học xong mỗi bài học bạn hoàn toàn có thể áp dụng ngay để sử dụng trong học tập cũng như trong công việc của mình.\r\n\r\nKhóa học đồng thời cũng hướng dẫn cách phát âm và củng cố vốn từ vựng, ngữ pháp căn bản trong tiếng Anh.\r\n\r\n ', 'https://static.unica.vn/upload/images/2019/04/tieng-anh-giao-tiep-cho-nguoi-bat-dau-_m_1555572976.jpg', 'https://shorten.asia/MysAAhYA'),
('ENG02', 'ENGLISH', 'HỌC ĐÁNH VẦN TIẾNG ANH TỪ A ĐẾN Z CHO TRẺ EM', '* Học \"HỌC ĐÁNH VẦN TIẾNG ANH TỪ A ĐẾN Z CHO TRẺ EM\" giúp trẻ nhận biết được từ vựng cũng như nắm  được cấu thành của từ  bao gồm những âm nào. Vì vậy, trẻ sẽ luyện được thói quen phát âm đầy đủ và chính xác các âm cấu thành để đọc đúng một từ; đồng thời việc nhận rõ cấu tạo từ sẽ khắc phục được nhược điểm lớn về việc phát âm tiếng Anh thiếu âm cuối từ . Kết quả là trẻ sẽ đọc - nói chuẩn từ một cách rất tự nhiên và chính xác.\r\n\r\n* Học \"HỌC ĐÁNH VẦN TIẾNG ANH TỪ A ĐẾN Z CHO TRẺ EM\" không bắt trẻ phải học thuộc lòng, “học vẹt” .  Dựa vào những quy tắc ngữ âm, trẻ có thể tự “giải mã” (decoding) một từ thành những âm khác nhau, do đó kể cả khi đã quên, trẻ vẫn tự tìm ra cách đọc đúng của từ đó , đồng thời sẽ phát triển kỹ năng đọc - viết tiếng Anh của trẻ.\r\n* Khóa học bao gồm các hoạt động học tập kích thích tư duy và hấp dẫn thông qua các hình ảnh thực tế, trò chơi, bài hát và các câu truyện ngắn cho phép trẻ em tích cực áp dụng những gì chúng học vào giao tiếp bằng tiếng Anh ngay từ nhỏ.\r\n* Các bài hát và trò chơi khuyến khích trẻ khám phá sự kết nối giữa âm thanh và chữ cái tiếng Anh; đồng thời tăng cường sự ghi nhớ từ rất tự nhiên.\r\n* Bài giảng cung cấp nền tảng hoàn hảo cho việc học tiếng Anh của trẻ trong môi trương học tập hiện đại và giúp học sinh thực hành ngay trong lúc học.\r\n\r\n* Thúc đẩy việc học tại nhà của trẻ cũng như rèn luyện kỹ năng tự học và  khuyến khích tình yêu đọc sách ở trẻ.\r\n* Giúp trẻ sớm tiếp cận các kỹ năng mới của thế kỷ 21: sự sáng tạo, tư duy phản biện, giao tiếp và hợp tác.', 'https://static.unica.vn/upload/images/2020/04/PIC-2 88x400_m_1586937636.jpg', 'https://shorten.asia/U3BpgKvy'),
('ENG01', 'ENGLISH', 'Tiếng Anh giao tiếp căn bản cho người Mất gốc', 'Search, search, search..... Cách học tiếng Anh giao tiếp, Học tiếng Anh giao tiếp căn bản, Tiếng Anh cho người mất gốc, Tiếng Anh cho người đi làm.....\r\n\r\nBạn thấy quen không ạ?\r\n\r\nBạn đã bao giờ liên tục hỏi Bác Google cách học tiếng Anh hiệu quả, học tiếng Anh từ đầu...Nhưng vẫn không tìm ra cho mình một giải pháp, một cách thức, một giáo viên, hay một trung tâm học hiệu quả. Tiếng Anh của bạn vẫn.... Oh my God, Tôi chả nói được tiếng Anh đâu! \r\n\r\nĐừng lo lắng bạn nhé, không cần phải tìm kiếm đâu xa, ngay tại đây, Unica sẽ giúp bạn. \r\n\r\nKhóa học tiếng Anh giao tiếp căn bản cho người Mất gốc của Giảng viên Victoria Dương sẽ là cầu nối, là nền móng cho tiếng Anh của bạn bay cao, bay xa.\r\n\r\nNhững chủ đề đơn giản nhưng gần gũi như Giới thiệu bản thân, Shopping, Hỏi giờ, Giao tiếp trong Nhà hàng, Khách sạn,... khóa học giúp bạn, dù là người mới bắt đầu, chưa biết gì về tiếng Anh vẫn hiểu và thực hành giao tiếp được ngay. Còn nếu như, bạn đã có chút kiến thức, khả năng tiếng Anh, thì khóa học này sẽ giúp bạn hệ thống bài bản những chủ đề quen thuộc trong giao tiếp hàng ngày. \r\n\r\nVới tiêu chí: đơn giản, căn bản nhưng ứng dụng cao, Giảng viên tiếng Anh Victoria Duong đã giúp cho rất nhiều người chinh phục được tiếng Anh và tự tin trong giao tiếp. ', 'https://static.unica.vn/upload/images/2019/04/tieng-anh-giao-tiep-danh-cho-nguoi-mat-goc_m_1555557717.jpg', 'https://shorten.asia/5hhhANP2'),
('MAR01', 'Marketing', 'Facebook Marketing Du Kích Tiếp cận hàng ngàn khách hàng với chi phí bằng 0', 'Facebook hiện đang có sức ảnh hưởng rất lớn đến đời sống hằng ngày của chúng ta. Sự có mặt của người dùng trên mạng xã hội biến nó trở thành một mảnh đất  vô cùng \"màu mỡ\" và \"béo bở\" của các nhà làm Marketing Online tung hoành. Và sự thật có hàng chục triệu người trên thế giới đã thành công và trở nên giàu có nhờ kinh doanh, chạy quảng cáo trên Facebook.\r\n\r\nNhưng làm thế nào để bạn thể lên được một chiến lược bán hàng hiệu quả mà không tốn bất cứ một chi phí nào? Đây là một câu hỏi vô cùng khó và đang được nhiều người đi tìm kiếm câu trả lời.\r\n\r\nĐáp án của câu hỏi đó sẽ được bất mí sau khi bạn tham gia khóa học  \"Facebook Marketing Du Kích Tiếp cận hàng ngàn khách hàng với chi phí bằng 0”. Với  25 bài giảng, thời lượng học là 03 giờ 17 phút, bạn sẽ sẽ có một cái nhìn tổng quát nhất về kinh doanh sản phẩm trên Facbook, biết thuật toán quan trọng để thông tin hiển thị đến người dùng Facebook, xây dựng thương hiệu, Content cho Facebook cá nhân, 5 bước xây dựng hệ thống tự động để facebook quảng cáo miễn phí giúp mình...\r\n\r\nKhông những thế, khi các bạn đến với khóa học “Facebook Marketing Du Kích Tiếp cận hàng ngàn khách hàng với chi phí bằng 0” của chuyên giao đào tạo Nguyễn Huỳnh Giao trên UNICA bạn sẽ nắm được:\r\n\r\nCách thức tiếp cận hàng ngàn khách hàng tiềm năng trên Facebook với chi phí 0 đồng.\r\nCập nhật các tình hình mới nhất về các sản phẩm kinh doanh online.\r\nHiểu rỏ nền tản cung cấp thông tin của Facebook để bán hàng hiệu quả.\r\nNhanh tay đăng ký để nhận được nhiều lợi ích từ khóa học nhé!', 'https://static.unica.vn/upload/images/2019/04/Facebook-marketing-chi-phi-0-dong_m_1555573466.jpg', 'https://shorten.asia/AFPtERMn'),
('CSS01', 'FRONT-END', 'Bootstrap CSS Framework - CSS & Component', 'Tất cả các kiến thức về HTML, CSS đã có thể giúp bạn tự tin xây dựng được các giao diện với bố cục từ cơ bản đến phức tạp đảm bảo hiển thị tốt trên nhiều kích thước màn hình (Responsive Design). Tuy nhiên, chúng sẽ tiêu tốn của chúng ta khá nhiều thời gian và công sức. Khóa Học Bootstrap CSS Framework ra đời chính là giúp chúng ta giải quyết vấn đề đó. Nó không những giúp chúng ta rút ngắn thời gian thiết kế giao diện có bố cục phức tạp mà còn đảm bảo giao diện đó bắt mắt và hiển thị tốt trên nhiều thiết bị, từ desktop, laptop cho tới tablet, mobile. Ngoài ra, trang bị kiến thức về Bootstrap CSS Framework cũng là một phần không thể thiếu cho các Front-End Developer khi nó dần trở thành yêu cầu tất yếu khi xin việc.', 'https://static.unica.vn/upload/images/2019/05/hoc-bootstrap_m_1558079045.jpg', 'https://shorten.asia/3UgJjWte'),
('CN02', 'Tiếng Trung', 'Tiếng Trung khẩu ngữ thực hành', 'Bạn đang chuẩn bị đi xuất khẩu lao động Trung, Đài và muốn học giao tiếp tiếng Trung nhanh. \r\n\r\nBạn thường xuyên phải làm việc với người Trung Quốc, nhiều lúc bạn không hiểu được những câu khẩu ngữ họ hay dùng. \r\n\r\nKhóa học Tiếng Trung khẩu ngữ thực hành được thiết kế thành 30 bài giảng với 30 chủ đề khác nhau. Mỗi bài giảng bao gồm: Bài khóa, Từ mới, Ngữ pháp, phần hỗ trợ ôn tập, giúp bạn dễ dàng ghi nhớ bài khóa. Hiểu và vận dụng được trong giao tiếp với người Trung Quốc\r\n\r\nNhững mẫu câu khẩu ngữ tiếng Trung giao tiếp thường dùng trong sinh hoạt hàng ngày là một trong những cách học tiếng Trung giao tiếp theo chủ đề hiệu quả. Để giao tiếp tiếng Trung tốt bạn có thể vận dụng chúng vào cuộc sống, thường xuyên giao tiếp với mọi người, tạo thành thói quen nói tiếng Trung trôi chảy, tự tin.', 'https://static.unica.vn/upload/images/2019/06/tieng-trung-khau-ngu-thuc-hanh_m_1561536305.jpg', 'https://shorten.asia/GF2dc8sN'),
('CN03', 'Tiếng Trung', 'Chinh phục 600 từ vựng Tiếng Trung HSK 1-2-3', 'Bạn muốn kiếm cho mình một chứng chỉ để ghi dấu bản thân, làm đẹp CV xin việc?\r\n\r\nBạn muốn giao tiếp với người Trung Hoa nhưng không biết nhiều từ vựng?\r\n\r\nMuốn đi xuất khẩu lao động, xin việc tại các công ty, tập đoàn lớn tại Đài Loan, Trung Quốc…\r\n\r\nKhóa học \"Chinh phục 600 từ vựng Tiếng Trung HSK 1-2-3\" của giảng viên Phan Diệu Linh sẽ hướng dẫn cách học từ vựng, phát âm chuẩn, Học 600 từ vựng HSK 1-2-3, từ vựng được xếp theo thứ tự phiên âm la tinh abc,chữ Hán, phiên âm, ngữ nghĩa, câu ví dụ rất kỹ trong từ bài học.', 'https://static.unica.vn/upload/images/2019/06/chinh-phuc-600-tu-vung-tieng-trung_m_1561371012.jpg', 'https://shorten.asia/DZwDkvQ3'),
('CN04', 'Tiếng Trung', 'Chinh phục Tiếng Trung thật đơn giản', 'Bạn yêu thích văn hóa, ngôn ngữ Trung Quốc\r\nBạn đang học tiếng Trung với mong muốn làm việc tại các công ty Trung Quốc hay đi xuất khẩu lao động.\r\nBạn đã học Tiếng Trung nhiều năm nhưng quên hết, muốn ôn lại từ đầu bài bản. \r\nKhóa học Chinh phục Tiếng Trung thật đơn giản dành cho người mới bắt đầu học tiếng Trung. Bạn sẽ được học theo các chủ đề cơ thông dụng như: Chào hỏi, cảm ơn, nghề nghiệp, giới thiệu, mua sắm... Thông qua các chủ đề, các đoạn hội thoại của người bản ngữ, bạn sẽ được học phát âm, học từ vựng, cách viết chữ Hán,... từ đó nói được tiếng Trung cơ bản.\r\n\r\nSau khi hoàn thành khóa học, bạn sẽ thông thạo 4 kỹ năng nghe, nói, đọc, viết với những chủ đề giao tiếp cơ bản, thông dụng hàng ngày. Bạn sẽ có thể du lịch Trung quốc mà không cần phiên dịch, khóa học là nền tảng để tự học nâng cao.', 'https://static.unica.vn/upload/images/2019/06/chinh-phuc-tieng-trung-don-gian_m_1561513200.jpg', 'https://shorten.asia/yJvdefDh'),
('CN05', 'Tiếng Trung', 'Tiếng Trung ứng dụng thực hành cấp tốc (Cao cấp)', 'Bạn cần học tiếng Trung cấp tốc?\r\nBạn đã mất gốc và muốn lấy lại căn bản tiếng Trung?\r\nBạn loay hoay không biết bắt đầu từ đâu và học như thế nào cho hiệu quả?\r\nChương trình Tiếng Trung ứng dụng thực hành cấp tốc, được chia thành 3 khóa (Sơ cấp, Trung cấp, Cao cấp) với những bài giảng đi từ cơ bản đến nâng cao, giảng viên Nguyễn Danh Vân sẽ giúp bạn học và thực hành tiếng Trung ngay, bạn không cần phải tốn quá nhiều thời gian.\r\n\r\nMỗi bài giảng bao gồm: Các mẫu câu cần ghi nhớ; Bài khóa với phần giảng giải chi tiết từ vựng, ngữ pháp, giúp bạn ghi nhớ nhanh các từ vựng, ngữ pháp trọng tâm, các mẫu câu hội thoại, thực hành giao tiếp được ngay.\r\n\r\nBài giảng trực quan như học trực tiếp, nội dung chi tiết, đầy đủ giúp bạn nhanh chóng làm chủ tiếng Trung, tự tin giao tiếp với người bản địa.\r\n\r\nChào mừng bạn đến với khóa 3: Tiếng Trung ứng dụng thực hành cấp tốc (Cao cấp)', 'https://static.unica.vn/upload/images/2019/04/tieng-trung-ung-dung-thuc-hanh-cap-toc_m_1555642596.jpg', 'https://shorten.asia/GyKkYW58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;