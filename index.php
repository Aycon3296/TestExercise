<title>Тест</title>

<script src="jquery-3.3.1.min.js"></script>
<script src="calc.php"></script>

<CalcBlock>
	<form id = "calc" action="" method="POST">
		<table>
		    <tr>
		        <td colspan="3"><H2>Калькулятор</H2></td>
		    </tr>
		    <tr>
		        <td>
		        	Дата оформления вклада:<br/>

					Сумма вклада:<br/>

					Срок вклада:<br/>

					Пополнение вклада:<br/>

					Сумма пополнения вклада:
				</td>
		        <td>
		        	<input id="Date" type="TEXT" name="date" value="дд.мм.гггг" id="datepicker"/><br/>

					<input type="TEXT" name="sum" value="1000"/><br/>

					<select name="term" size=1>
						<option value=1>1 год</option>
						<option value=1>2 года</option>
						<option value=1>3 года</option>
						<option value=1>4 года</option>
						<option value=1>5 года</option>
					</select><br/>

					<input type=radio name=replenishment value=no checked>Нет
					<input type=radio name=answer value=yes>Да<br/>

					<input type="TEXT" name="remember" value="1000"/><br/>
		        </td>
		        <td>
		        	<br/>
					<input type="range" min="1000" max="3000000" step="1" value="1000">
					<br/>
					<br/>
					<br/>
					<input type="range" min="1000" max="3000000" step="1" value="1000">
		        </td>
		    </tr>
		    <tr>
		        <td colspan="3">
		        	<input type=submit value=Рассчитать><input/>
		        </td>
		    </tr>
		</table>
	</form>
</CalcBlock>