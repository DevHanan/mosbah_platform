<!-- Libs JS -->
<script src="{{asset('dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1692870487')}}" defer></script>
<script src="{{asset('dist/libs/jsvectormap/dist/maps/world.js?1692870487')}}" defer></script>
<script src="{{asset('dist/libs/jsvectormap/dist/maps/world-merc.js?1692870487')}}" defer></script>
<!-- Tabler Core -->

<script src="{{asset('front/js/jquery.min.js')}}"></script>
<!-- <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>   -->
<script src="{{asset('front/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front/js/select2.full.min.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!--animation-->
<script>
	AOS.init();
</script>
<!-- <script src="{{asset('front/js/price_filter.js')}}"></script>  -->
<!-- <script src="{{asset('front/js/pagination.js')}}"></script> 
    <script src="{{asset('front/js/main.js')}}"></script>  -->

<script src="{{asset('dist/js/tabler.min.js?1692870487')}}" defer></script>
<script src="{{asset('dist/js/demo.min.js?1692870487')}}" defer></script>


<script>
	// @formatter:off
	document.addEventListener("DOMContentLoaded", function() {
		window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
			chart: {
				type: "radialBar",
				fontFamily: 'inherit',
				height: 40,
				width: 40,
				animations: {
					enabled: false
				},
				sparkline: {
					enabled: true
				},
			},
			tooltip: {
				enabled: false,
			},
			plotOptions: {
				radialBar: {
					hollow: {
						margin: 0,
						size: '75%'
					},
					track: {
						margin: 0
					},
					dataLabels: {
						show: false
					}
				}
			},
			colors: [tabler.getColor("blue")],
			series: [35],
		})).render();
	});
	// @formatter:on
</script>
<script>
	// @formatter:off
	document.addEventListener("DOMContentLoaded", function() {
		window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
			chart: {
				type: "area",
				fontFamily: 'inherit',
				height: 192,
				sparkline: {
					enabled: true
				},
				animations: {
					enabled: false
				},
			},
			dataLabels: {
				enabled: false,
			},
			fill: {
				opacity: .16,
				type: 'solid'
			},
			stroke: {
				width: 2,
				lineCap: "round",
				curve: "smooth",
			},
			series: [{
				name: "Purchases",
				data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
			}],
			tooltip: {
				theme: 'dark'
			},
			grid: {
				strokeDashArray: 4,
			},
			xaxis: {
				labels: {
					padding: 0,
				},
				tooltip: {
					enabled: false
				},
				axisBorder: {
					show: false,
				},
				type: 'datetime',
			},
			yaxis: {
				labels: {
					padding: 4
				},
			},
			labels: [
				'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
			],
			colors: [tabler.getColor("primary")],
			legend: {
				show: false,
			},
			point: {
				show: false
			},
		})).render();
	});
	// @formatter:on
</script>
<script>
	// @formatter:off
	document.addEventListener("DOMContentLoaded", function() {
		window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
			chart: {
				type: "line",
				fontFamily: 'inherit',
				height: 24,
				animations: {
					enabled: false
				},
				sparkline: {
					enabled: true
				},
			},
			tooltip: {
				enabled: false,
			},
			stroke: {
				width: 2,
				lineCap: "round",
			},
			series: [{
				color: tabler.getColor("primary"),
				data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
			}],
		})).render();
	});
	// @formatter:on
</script>
<script>
	// @formatter:off
	document.addEventListener("DOMContentLoaded", function() {
		window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
			chart: {
				type: "line",
				fontFamily: 'inherit',
				height: 24,
				animations: {
					enabled: false
				},
				sparkline: {
					enabled: true
				},
			},
			tooltip: {
				enabled: false,
			},
			stroke: {
				width: 2,
				lineCap: "round",
			},
			series: [{
				color: tabler.getColor("primary"),
				data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
			}],
		})).render();
	});
	// @formatter:on
</script>
<script>
	// @formatter:off
	document.addEventListener("DOMContentLoaded", function() {
		window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
			chart: {
				type: "line",
				fontFamily: 'inherit',
				height: 24,
				animations: {
					enabled: false
				},
				sparkline: {
					enabled: true
				},
			},
			tooltip: {
				enabled: false,
			},
			stroke: {
				width: 2,
				lineCap: "round",
			},
			series: [{
				color: tabler.getColor("primary"),
				data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
			}],
		})).render();
	});
	// @formatter:on
</script>
<script>
	// @formatter:off
	document.addEventListener("DOMContentLoaded", function() {
		window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
			chart: {
				type: "line",
				fontFamily: 'inherit',
				height: 24,
				animations: {
					enabled: false
				},
				sparkline: {
					enabled: true
				},
			},
			tooltip: {
				enabled: false,
			},
			stroke: {
				width: 2,
				lineCap: "round",
			},
			series: [{
				color: tabler.getColor("primary"),
				data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
			}],
		})).render();
	});
	// @formatter:on
</script>
<script>
	// @formatter:off
	document.addEventListener("DOMContentLoaded", function() {
		window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
			chart: {
				type: "line",
				fontFamily: 'inherit',
				height: 24,
				animations: {
					enabled: false
				},
				sparkline: {
					enabled: true
				},
			},
			tooltip: {
				enabled: false,
			},
			stroke: {
				width: 2,
				lineCap: "round",
			},
			series: [{
				color: tabler.getColor("primary"),
				data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
			}],
		})).render();
	});
	// @formatter:on
</script>
<script>
	// @formatter:off
	document.addEventListener("DOMContentLoaded", function() {
		window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
			chart: {
				type: "line",
				fontFamily: 'inherit',
				height: 24,
				animations: {
					enabled: false
				},
				sparkline: {
					enabled: true
				},
			},
			tooltip: {
				enabled: false,
			},
			stroke: {
				width: 2,
				lineCap: "round",
			},
			series: [{
				color: tabler.getColor("primary"),
				data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
			}],
		})).render();
	});
	// @formatter:on
</script>
<!-- courses scripts -->
<script>
	$(document).ready(function() {
		$('.select2').select2();
	});
</script>

<script>
	function checkAll(filterClass) {
		// Get the "Check All" checkbox and all other checkboxes
		const checkAllCheckbox = document.querySelector(`.${filterClass} #checkAll`);
		const checkboxes = document.querySelectorAll(`.${filterClass} .form-check-input:not(.check-all)`);

		// Add event listener to the "Check All" checkbox
		checkAllCheckbox.addEventListener('change', function() {
			checkboxes.forEach(function(checkbox) {
				checkbox.checked = checkAllCheckbox.checked;
			});
		});

		// Add event listener to other checkboxes to uncheck "Check All" if any checkbox is unchecked
		checkboxes.forEach(function(checkbox) {
			checkbox.addEventListener('change', function() {
				if (!this.checked) {
					checkAllCheckbox.checked = false;
				}
			});
		});
	}
</script>

<script>
    $(".next").click(function(){
  if($(".step-wrapper li:last-child").hasClass('completed')){
    alert("completed");
     return
  }
	$(".step-wrapper li.active").addClass("completed").removeClass("active").next('li').addClass("active");  
});

$(".previous").click(function(){
  if($(".step-wrapper li:first-child").hasClass('active')){
    alert("Already on first step");
     return
  }
	$(".step-wrapper li.active").removeClass("active completed").prev('li').addClass("active").removeClass('completed');
  if($(".step-wrapper li:last-child").hasClass('completed')){
    $(".step-wrapper li:last-child").removeClass('completed').addClass('active')
  }
});

</script>
