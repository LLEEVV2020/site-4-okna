<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
<meta http-equiv="refresh" content="5; url=http://����-��-�������.��/index_.html">
<title>"���� �� �������"</title>
</head>
<body>

<script language="JavaScript" type="text/javascript">
<!-- 
location="http://����-��-�������.��/index_.html" 
//--> 
</script>    
    
<?php
if (isset($_POST['tel'])) {$tel = $_POST['tel'];}

$to1 = "avoshnikov@yandex.ru"; /*������� ��� ����� ������������ �����*/
$to2 = "Okna-centr31@mail.ru"; /*������� ��� ����� ������������ �����*/
$headers = "Content-type: text/plain; charset = windows-1251";
$subject = "��������� � ������ ����� ���� �� �������";
$message = "��������� � ������ ����� ���� �� �������, ����� (������ �� ������) \n����� ��������: $tel";
$send1 = mail ($to1, $subject, $message, $headers);
$send2 = mail ($to2, $subject, $message, $headers);
if (($send1 == 'true') && ($send2 == 'true'))
{
echo "";
echo "";
}
else 
{
echo "<p><b>������. ��������� �� ����������!";
}
?>
</body>
</html>