<?php
require("class.phpmailer.php");


$mail = new PHPMailer();

$mail->IsSMTP();                   // ����ʹ�� SMTP
$mail->Host = "smtp.sina.com.cn";          // ָ���� SMTP ��������ַ
$mail->SMTPAuth = true;                // ����Ϊ��ȫ��֤��ʽ
$mail->Username = "lxtwanzcs@sina.com";             // SMTP ���ʼ��˵��û���
$mail->Password = "qq884168";             // SMTP ����
$mail->CharSet = "gb2312";                   //����ʼ���������

$mail->From = "lxtwanzcs@sina.com";        //���Է�����
$mail->FromName = "��Ѷ";
$mail->AddAddress("timi@pof-dm.org");      //�ռ��˵�ַ
//$mail->AddAddress("terryxiahui@yahoo.com.cn","dalilng");
//$mail->AddAddress("xiahui@kaible.com","daling");  // ��ѡ
//$mail->AddReplyTo("xiahui@kaible.com", "TERRY2");

$mail->WordWrap = 80;                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");     // �Ӹ���
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");  // ������Ҳ��ѡ����������
$mail->IsHTML(true);                  // �����ʼ���ʽΪ HTML

$mail->Subject = "��Ѹ�ٸ��һ��ʼ�,��ô";     // ����
$mail->Body  = '<B>��ϲ�㣬�ɹ�ע��Ϊ���ǵ�VIP��Ա��</B>'; // ����
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients"; // ��������

if(!$mail->Send())
{
  echo "Message could not be sent. <p>";
  echo "Mailer Error: " . $mail->ErrorInfo;
  exit;
}

echo "Message has been successfully sent��";

/*
 �������ڳ�������ʼ�POP3��SMTP����
1.�������� POP3 �� SMTP ��������ַ���ã�
���� POP3 ���������˿�110�� SMTP ���������˿�25�� 
@163.com pop3.163.com smtp.163.com 
@126.com pop3.126.com smtp.126.com 
@netease.com pop.netease.com smtp.netease.com 
@yeah.net pop.yeah.net smtp.yeah.net 
���е�SMTP����������Ҫ�����֤��
2.Sina����ʼ�����������:
���ţ�pop3����������pop3.sina.com.cn
���ţ�smtp����������smtp.sina.com.cn
��ѡ��smtp������Ҫ�������֤ѡ��
3.Yahoo�й�����ʼ����������ã�
�����ʼ�(POP3)��������pop.mail.yahoo.com.cn
�����ʼ�(SMTP)��������smtp.mail.yahoo.com.cn
Yahoo����ʼ����������ã��������������ɹ���ģ�
�����ʼ�(POP3)��������pop.mail.yahoo.com
�����ʼ�(SMTP)��������smtp.mail.yahoo.com
4.Gmail�ͻ��ˣ�
POP��������pop.gmail.com
��ssl�˿�995��ע�⣬pop��Ĭ�϶˿���110��������Ҫ�ĳ�995��
SMTP��������smtp.gmail.com 
smtp��������Ҫ�����֤
����ssl�˿�465��587
�ʻ��������gmail�û��������� [email=��@gmail.com]��@gmail.com[/email]���ⲿ�֣�
Email��ַ����������gmail��ַ([url=mailto:username@gmail.com]username@gmail.com[/url])
���룺���gmail����
5.�л�������
pop.china.com
smtp.china.com
6.�Ѻ� 
pop.sohu.com 
smtp.sohu.com
7.163�����ʾ֡�
163.net
smtp.163.net 
8.263�����ʾ֡�
263.net 
smtp.263.net
9.QQ����
pop3������: pop.qq.com | smtp������: smtp.qq.com*/
?>

