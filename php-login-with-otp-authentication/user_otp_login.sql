CREATE TABLE IF NOT EXISTS `registered_users` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
)
CREATE TABLE IF NOT EXISTS `otp_expiry` (
`id` int(11) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `is_expired` int(11) NOT NULL,
  `create_at` datetime NOT NULL
)

create table info_colll(name varchar(20) not null, PCM_percentage float not null , admi_type varchar(20) not null , prefered_batch varchar(20) not null );




delete from registerd_users where email="abaysevi012@gmail.com";