<style>
	.take-over-custom{
		width: 100%;
		height: 100%;
		background-color: rgba(255,255,255,1);
		position: fixed;
		right:-100%;
		top: 0px;
		z-index: 1000000;
		transition: all 0.5s linear;

	}
	.over-box{
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.box{
		width: 970px;
		height: 600px;
		
		position: relative;
		display: flex;
		justify-content: center;
		align-items: center;

	}
	.player-take{
		width: 700px;
		height: 400px;
		background-color: black;
		position: relative;

	}
	.fondo-take{
		position: absolute;
		left: 0;
		top: 0px;
		width: 100%;
		height: 100%;

	}
	.take-over-custom.show-take{
	right: 0px!important;
	}
</style>
<div id="pub-take-over" class="take-over-custom">

	<div class="over-box">
		
		<div class="box">
			<img class="fondo-take" src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/latinaTheme/img/skin_yosoy.jpg">
			<div class="player-take"></div>
		</div>
	</div>
	
</div>