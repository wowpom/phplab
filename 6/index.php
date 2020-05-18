<html>
  <body>
 
    <table style="width: 500px;border:0px;">
      <tr>
        <td colspan="2" style="background-color:#85C2FF;">
          <?php
           require('top.inc.php');
            ?> 
        </td>
      </tr>
      <tr style="vertical-align: top;">
        <td style="background-color:#C2EBFF;width:100px;text-align:top;">
          <b>Меню</b><br>
           <?php
           require('menu.inc.php');
            ?>
        </td>
        <td style="background-color:#fff;height:200px;width:400px;text-align:top;">
          Таблица умножения <?php
           require('lib.inc.php');
            ?>
			</td>
      </tr>
      <tr>
        <td colspan="2" style="background-color:#85C2FF;text-align:center;">
		<?php
           require('bottom.inc.php');
            ?>
        </td>
      </tr>
    </table>

  </body>
</html> 