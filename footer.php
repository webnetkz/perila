    <footer>
      <div class="contacts">
        <a href="tel:<?=$phoneLink;?>" class="promo-phone"><?=$phone;?></a>
      </div>
      <div class="copyright">
        <a href="<?=$site;?>"><?=$site;?> <sup>©</sub></a> <?=date('Y');?>
      </div>
    </footer>
  

  <script type="module" src="./assets/js/cursor.js"></script>
  <script type="module" src="./assets/js/Burger.js"></script>


  <script src="./assets/js/main.js"></script>
  <script>
			if ('serviceWorker' in navigator) {
				// window.addEventListener('load', function() {
				// 	navigator.serviceWorker.register('./sw.js')
				// 	.then(function(registration) {
				// 	})
				// 	.catch(function(error) {
				// 	});
				// });
			}
		</script>
	</body>
</html>