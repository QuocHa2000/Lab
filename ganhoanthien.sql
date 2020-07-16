-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 16, 2020 lúc 03:49 PM
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
('MAR04', 'Marketing', 'Khóa học Marketing tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('MAR05', 'Marketing', 'Khóa học Marketing tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('HTML1', 'FRONT-END', 'Xây dựng Website Responsive với HTML5, CSS3', 'Responsive là một công nghệ dùng cho ngành thiết kế website, sử dụng để website phù hợp trên tất cả các kích thước màn hình từ một cơ sở dữ liệu và một layout gốc. Trước đây người thiết kế phải thiết kế 2 bản riêng biệt một cho màn hình máy tính và một cho màn hình thiết bị di động. Sự ra đời của Responsive là giải pháp tuyệt vời của vấn đề này, vẫn chỉ một bản thiết kế, người dùng có thể truy cập trên các thiết bị kích thước khác nhau với cùng địa chỉ URL, giao diện hiển thị vẫn giữ nguyên.\r\nBắt đầu từ năm 2015 công nghệ thiết kế website responsive đã trở thành xu hướng, được áp dụng phổ biến và nhận được nhiều phản hồi tích cực từ khách hàng sử dụng, giúp người đọc có thể dùng và tìm kiếm dễ dàng trên website.\r\nHiểu được điều đó, chúng tôi hợp tác cùng giảng viên có nhiều năm kinh nghiệm trong lĩnh vực lập trình Bùi Quang Trung mang đến cho bạn khóa học \"Xây dựng Website Responsive với HTML5, CSS3\"\r\nKhóa học bao gồm 14+ chương với 76+ bài học. Ở 8 chương đầu học viên sẽ được cung cấp kiến thức từ cơ bản đến nâng cao về xây dựng website responsive sử dung HTML5 và CSS3. Với 4 chương còn lại học viên sẽ cùng thầy thực hiện các project thực hành trực tiếp sử dụng các kiến thức đã được học để cho ra một sản phẩm demo hoàn chỉnh.\r\nThời lượng khóa học kéo dài hơn 12 giờ đồng hồ với kiến thức tổng hợp, đặc biệt có nhiều kỹ năng và kinh nghiệm kèm theo các bài tập thực hành lấy những ví dụ thực tế nhất, giúp bạn có thể áp dụng ngay kiến thức đã học để làm website cho riêng mình.\r\nBất kể mục đích lập trình của bạn là gì ( kiếm tiền, nâng cao kiến thức, master trong lập trình website ...), khoá học này đều có thể đáp ứng được cho bạn.', 'https://static.unica.vn/upload/images/2019/06/xay-dung-website-resposive-voi-html5-css3_m_1561369326.jpg', 'https://shorten.asia/4g4XBhbE'),
('HTML2', 'FRONT-END', 'Học HTML5/CSS3, BOOTSTRAP 4 và học cắt Web từ file thiết kế', 'Có phải bạn: \r\n\r\nBạn bắt đầu làm quen và biết đến cắt web, thiết kế website?\r\nBạn yêu thích những công việc đầy sáng tạo, ý tưởng mới lạ cắt, thiết kế web?\r\nCông việc của bạn đòi hỏi bạn cần biết bắt web, xử lý thông tin, trình bày các nội dung trên web?\r\nBạn cần học thêm những kiến thức cơ bản nhất về cắt, thiết kế  web để phục vụ cho công việc của mình, cũng như có thêm cơ hội thăng tiến, kiếm thêm thu nhập cho bản thân?\r\nBạn mới chỉ biết về cắt, thiết kế web chứ không thành thạo và biết các công cụ sử dụng trong cắt web?\r\nTất cả những khó khăn đó của bạn sẽ được giải quyết nhanh chóng, ngay lập tức khi bạn tham gia khóa. Khóa học sẽ giúp bạn cải thiện và nâng cao ngay lập tức trình độ cắt web, sử dụng công cụ tác nghiệp trên website. Đặc biệt, đây là khóa học dành cho những người mới bắt đầu, cơ bản từ con số 0 về thiết kế website.\r\n\r\nGiảng viên Nguyễn Đức Việt sẽ cùng với Học viên Online Unica.vn mang đến cho các bạn một khóa học “Học HTML5/CSS3, BOOTSTRAP 4 và học cắt Web từ file thiết kế” với 13 phần giúp các học viên biến những kỹ năng cắt web trở nên đơn giản vô cùng. Khóa học cung cấp cho học viên đầy đủ những kỹ năng cắt web từ cơ bản đến nâng cao. Trong quá trình học, học viên cũng được thực hành cắt web cụ thể trên các trang báo như: VnExpress, Dantri, Kenh14, Baomoi, Vietnamnet.vn,...\r\n\r\nCác bạn sẽ được rèn luyện thành thục tất cả các kỹ năng cắt web được sử dụng nhiều nhất hiện nay, sử dụng Bootstrap 4 - công cụ lập trình HTML Front End mới nhất đang được nhiều đơn vị web lựa chọn.  Cùng rất nhiều những tính năng cắt web tối ưu, đảm bảo sản phẩm đẹp các sử dụng font icon và làm các hiệu ứng hover trực tiếp trên web,...\r\n\r\nTrình độ cắt web của bạn sẽ được “nâng cấp” khiến bạn không khỏi bất ngờ. Bạn không chỉ thỏa mãn được đam mê của mình, thỏa sức sáng tạo với các hiệu ứng và kĩ năng cắt web, mà còn mở thêm nhiều cơ hội để thăng tiến trong công việc và thể hiện trình độ chuyên môn của mình.\r\n\r\nVậy còn chờ đợi gì nữa, đăng ký khóa học “Học HTML5/CSS3, BOOTSTRAP 4 và học cắt Web từ file thiết kế” của giảng viên Nguyễn Đức Việt ngay hôm nay trước khi hết chương trình ưu đãi khóa học tại Unica thôi!', 'https://static.unica.vn/uploads/images/doanhuyen209@gmail.com/HTL_m.jpg', 'https://shorten.asia/7tvTgVYQ'),
('MAR03', 'Marketing', 'Khóa học Marketing tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('MAR02', 'Marketing', 'Khóa học Marketing tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('CSS02', 'FRONT-END', 'Khóa học CSS tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('CN01', 'Tiếng Trung', 'Khóa học Tiếng Trung tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('ENG05', 'ENGLISH', 'Khóa học Tiếng Anh tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('ENG04', 'ENGLISH', 'Khóa học Tiếng Anh tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('ENG03', 'ENGLISH', 'Khóa học Tiếng Anh tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('ENG02', 'ENGLISH', 'Khóa học Tiếng Anh tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('ENG01', 'ENGLISH', 'Khóa học Tiếng Anh tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('MAR01', 'Marketing', 'Khóa học Marketing tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('CSS01', 'FRONT-END', 'Khóa học CSS tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('CN02', 'Tiếng Trung', 'Khóa học Tiếng Trung tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('CN03', 'Tiếng Trung', 'Khóa học Tiếng Trung tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('CN04', 'Tiếng Trung', 'Khóa học Tiếng Trung tại Unica', 'Giới thiệu khóa học\r\n', '#', '#'),
('CN05', 'Tiếng Trung', 'Khóa học Tiếng Trung tại Unica', 'Giới thiệu khóa học\r\n', '#', '#');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
