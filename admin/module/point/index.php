<?php
echo '<div class="console box">';
echo '<h2>關卡選擇</h2>';
echo '<hr>';
echo '<form id="section">';
echo '<select name="section" id="section_select" style="width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;">';
echo '<option value="1">舒壓植物園</option>';
echo '<option value="2">打開新世界</option>';
echo '<option value="3">趨勢聯想</option>';
echo '<option value="4">溝通媒介</option>';
echo '<option value="5">摩斯密碼</option>';
echo '<option value="6">聽力輔助</option>';
echo '</select>';
echo '</form>';
echo '<script src="js/point.js"></script>';
echo '</div>';
echo '<div class="console box">';
echo '<h2>通關認證</h2>';
echo '<hr>';
echo '<form id="pass">';
echo '<input type="text" style="width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;" name="student" placeholder="請輸入通關者學號" />';
echo '<button id="pass_button" style="color:white;background-color: #E65100;width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;border-radius: 4px;cursor: pointer;">完成本關卡</button>';
echo '</form>';
echo '
<video id="preview"></video>
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById(\'preview\') });
      scanner.addListener(\'scan\', function (content) {
        console.log(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error(\'No cameras found.\');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
';
echo '</div>';
?>