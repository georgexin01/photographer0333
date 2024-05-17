</div>
<script src="/js/jquery.min.js"></script>
<script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router@3.5.2/dist/vue-router.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
	// Create Vue instance
	new Vue({
		el: '#app',
		data: {
			galleries: [],
			libraries: []
		},
		// 开始执行代码前，第一个执行就是 mounted
		mounted() {
			const sheetId = '1AV7ShrNFFoXcVRRT8e_1HKSQcEQza9Ij9L88MADwlMo';
			const getData = async (sheetId, tabName) => {
				try {
					const { data } = await axios.get(
						`https://docs.google.com/spreadsheets/d/${sheetId}/gviz/tq?tqx=out:json&sheet=${tabName}&headers=1`
					)
					return JSON.parse(data.substring(47).slice(0, -2))
				} catch (error) {
					throw error
				}
			}
			const sheetTransformer = (cols, rows) => {
				const response = []
				for (const x of rows) {
					const data = {}
					for (let y = 0; y < x.c.length; y++) {
						const key = cols[y].label
						const value = x.c[y]?.f ?? x.c[y]?.v

						if (key != '') {
							data[key] = value
						}
					}
					response.push(data)
				}
				return response
			}
			getData(sheetId, "galleries").then((data) => {
				this.galleries = sheetTransformer(data.table.cols, data.table.rows);
				setTimeout(() => {


				}, 1000);
			}).catch((error) => {
				console.error("An error occurred:", error);
			});
			getData(sheetId, "libraries").then((data) => {
				this.libraries = sheetTransformer(data.table.cols, data.table.rows);
				setTimeout(() => {
					$(document).ready(function () {
						$("[data-fancybox]").fancybox();
					});
					$('.animate-box').waypoint(function (direction) {
						var i = 0;
						if (direction === 'down' && !$(this.element).hasClass('animated')) {
							i++;
							$(this.element).addClass('item-animate');
							setTimeout(function () {
								$('body .animate-box.item-animate').each(function (k) {
									var el = $(this);
									setTimeout(function () {
										var effect = el.data('animate-effect');
										if (effect === 'fadeIn') {
											el.addClass('fadeIn animated');
										}
										else if (effect === 'fadeInLeft') {
											el.addClass('fadeInLeft animated');
										}
										else if (effect === 'fadeInRight') {
											el.addClass('fadeInRight animated');
										}
										else {
											el.addClass('fadeInUp animated');
										}
										el.removeClass('item-animate');
									}, k * 200, 'easeInOutExpo');
								});
							}, 100);
						}
					}, {
						offset: '85%'
					});
				}, 1000);
			}).catch((error) => {
				console.error("An error occurred:", error);
			});
		},
		methods: {
			googleImageConvertToImage(link) {
				return "https://lh3.googleusercontent.com/d/" + link.split('/')[5] + "=w500";
			},
			filterByGalleryName(url) {
				return this.libraries.filter(library => library.galleryUrl === url);
			},
			filterByGalleries(url) {
				const filteredGalleries = this.galleries.filter(gallery => gallery.url === url);
				if (filteredGalleries.length > 0) {
					return filteredGalleries[0].name;
				}
			},
			getGalleryUrl() {
				var pathname = window.location.pathname;
				var patharr = pathname.split("/");
				var pathname = patharr[patharr.length - 1];
				const matchedLinks = $('.annie-main-menu a[href*="' + pathname + '"]');
				matchedLinks.closest('li').addClass('active');
				matchedLinks.closest('.annie-sub').addClass('open');
				matchedLinks.closest('.annie-sub').find('ul').css('display', 'block');
				return pathname;
			}
		},
		computed: {
			filteredCustomers() {
				return this.customers.filter(customer => {
					const id = customer.id.toLowerCase();
					const name = customer.name.toLowerCase();
					const contactA = customer.contactA.toString().toLowerCase();
					const searchTerm = this.filterCustomer.toLowerCase();
					return (id.includes(searchTerm) || name.includes(searchTerm) || contactA.includes(searchTerm));
				});
			},
		},
	});

</script>
<script>
	var pathname = window.location.pathname;
	var patharr = pathname.split("/");
	var pathname = patharr[patharr.length - 1];
	if (pathname === "") {
		$('.annie-main-menu a:first').closest('li').addClass('active');
	} else {
		const matchedLinks = $('.annie-main-menu a[href*="' + pathname + '"]');
		matchedLinks.closest('li').addClass('active');
		matchedLinks.closest('.annie-sub').addClass('open');
		matchedLinks.closest('.annie-sub').find('ul').css('display', 'block');
	}
</script>
<!-- jQuery -->
<script src="/js/modernizr-2.6.2.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.flexslider-min.js"></script>
<script src="/js/sticky-kit.min.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<script src="/js/main.js"></script>
</body>

</html>