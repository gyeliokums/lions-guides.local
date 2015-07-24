(function( $ ) {
	var sliderSize,	curSlide = 0, nextSlide = -1, enable = true;
	function slideChange() {
		$( '.slider-indicator' ).removeClass( 'current' );
		enable = false;
		if ( nextSlide < 0 ) {
			if ( curSlide < sliderSize - 1 ) {
				nextSlide = curSlide + 1;
			} else {
				nextSlide = 0;
			}
		}
		$( '.slide#slide-' + curSlide ).css( 'z-index', 5 );
		$( '.slide#slide-' + nextSlide ).css({ 'z-index' : 3, 'display' : 'block' });
		$( '.slide#slide-' + curSlide ).stop().fadeOut( 800 );
		setTimeout( function(){ enable = true; }, 700 );
		curSlide = nextSlide;
		nextSlide = -1;
		$( '.slider-indicator#slide-' + curSlide ).addClass( 'current' );
	}

	$(document).ready(function() {
		/* Search form */
		$( '#keyword' ).after( '<div class="icon"></div>' ).attr( 'placeholder', 'Ключевое слово' );
		$( '#location' ).after( '<div class="icon"></div>' ).attr( 'placeholder', 'Категории лотов' );
		$( '#category' ).after( '<div class="icon"></div>' ).attr( 'placeholder', 'Telecommunications' );

		/* Dropdown */
		$( '.with-dropdown' ).on({
			click: function() {
				$( '.dropdown#dropdown-' + this.id ).css( 'width', $( this ).parent().css( 'width' ) );
				$( '.dropdown#dropdown-' + this.id ).toggle();
			}
		});

		$( document ).mousedown(function( e ) {
			if ( $( e.target ).closest( '.dropdown' ).length == 0 && $( e.target ).closest( '.with-dropdown' ).length == 0 ) {
				$( '.dropdown' ).hide();
			}
		});

		/* Checkboxes */
		var checkboxId = 0;
		$( 'input:checkbox' ).not( '.dark' ).hide().each(function() {
			$( this ).attr( 'id', 'checkbox-' + checkboxId )
					.before( '<div class="checkbox" id="' + this.id + '"></div>' );
			if ( $( this ).parent().text() ) {
				$( this ).parent().addClass( 'checkbox-label' ).attr( 'id', this.id );
			}
			if ( $( this ).attr( 'checked' ) ) {
				$( '.checkbox#' + this.id ).css( 'background-position', '-63px -16px' );
				$( '.checkbox-label#' + this.id ).addClass( 'checked' );
			} else {
				$( '.checkbox#' + this.id ).css( 'background-position', '-15px -16px' );
			}
			checkboxId++;
		});
		$( '.checkbox, .checkbox-label' ).on({
			click: function( e ) {
				if ( $( 'input[type=checkbox]#' + this.id ).attr( 'checked' ) ) {
					$( 'input#' + this.id ).removeAttr( 'checked' );
					$( '.checkbox#' + this.id ).css( { 'background-position' : '-15px -16px', 'opacity' : '1' } );
					$( '.checkbox-label#' + this.id ).removeClass( 'checked' );
				} else {
					$( 'input#' + this.id ).attr( 'checked', 'checked' );
					$( '.checkbox#' + this.id ).css( { 'background-position' : '-63px -16px', 'opacity' : '1' } );
					$( '.checkbox-label#' + this.id ).addClass( 'checked' );
				}
				e.preventDefault();
				e.stopPropagation();
			},
			mouseover: function() {
				if ( ! $( 'input#' + this.id ).attr( 'checked' ) ) {
					$( '.checkbox#' + this.id ).css( { 'background-position' : '-63px -16px', 'opacity' : '0.5' } );
				}
				e.stopPropagation();
			},
			mouseleave: function() {
				if ( ! $( 'input#' + this.id ).attr( 'checked' ) ) {
					$( '.checkbox#' + this.id ).css( 'background-position', '-15px -16px' );
				}
				$( '.checkbox#' + this.id ).css( 'opacity', '1' );
				e.stopPropagation();
			}
		});

		/* Dark checkboxes */
		var darkId = 0;
		$( 'input.dark' ).hide().each(function() {
			$( this ).attr( 'id', 'dark-' + darkId )
					.before( '<div class="dark dark-' + $( this ).attr( 'type' ) + '" id="' + this.id + '" ></div>' );
			if ( $( this ).parent().text() ) {
				$( this ).parent().addClass( 'dark-label dark-' + $( this ).attr( 'type' ) ).attr( 'id', this.id );
			}
			if ( $( this ).attr( 'checked' ) ) {
				$( '.dark#' + this.id ).css( 'background-position', '-167px -20px' );
				$( '.dark-label#' + this.id ).addClass( 'checked' );
			} else {
				$( '.dark#' + this.id ).css( 'background-position', '-112px -18px' );
			}
			darkId++;
		});
		$( '.dark-checkbox' ).click(function( e ) {
			if ( $( 'input[type=checkbox]#' + this.id ).attr( 'checked' ) ) {
				$( 'input[type=checkbox]#' + this.id ).removeAttr( 'checked' );
				$( '.dark#' + this.id ).css( 'background-position', '-112px -18px' );
				$( '.dark-label#' + this.id ).removeClass( 'checked' );
			} else {
				$( 'input[type=checkbox]#' + this.id ).attr( 'checked', 'checked' );
				$( '.dark#' + this.id ).css( 'background-position', '-167px -20px' );
				$( '.dark-label#' + this.id ).addClass( 'checked' );
			}
			e.preventDefault();
			e.stopPropagation();
		});
		$( '.dark-radio' ).click(function( e ) {
			var name = $( 'input[type=radio]#' + this.id ).attr( 'name' );
			$( 'input[type=radio][name=' + name + ']' ).each(function() {
				$( this ).removeAttr( 'checked' );
				$( '.dark#' + this.id ).css( 'background-position', '-112px -18px' );
				$( '.dark-label#' + this.id ).removeClass( 'checked' );
			});
			$( 'input[type=radio]#' + this.id ).attr( 'checked', 'checked' );
			$( '.dark#' + this.id ).css( 'background-position', '-167px -20px' );
			$( '.dark-label#' + this.id ).addClass( 'checked' );
			e.preventDefault();
			e.stopPropagation();
		});

		/* Warning */
		$( '.warning' ).prepend( '<div class="warning-img"></div>' )
				.append( '<div class="close-btn"></div>' );
		$( '.close-btn' ).click(function() {
			$( this ).parent().remove();
		});

		/* Select */
		var selectId = 0;
		$( 'select' ).hide().each(function() {
			if ( ! this.id ) {
				$( this ).attr( 'id', 'select-' + selectId );
				selectId++;
			}
			$( this ).after( '<div class="select" id="' + this.id + '"></div>' );
			$( '.select#' + this.id ).prepend( '<div class="select-header" id="' + this.id + '"></div>' );
			$( '.select-header#' + this.id ).prepend( '<p>' + (this.name == 'location' ? 'Месторасположение' : 'по дате') + '</p>' );
//			$( '.select-header#' + this.id ).prepend( '<p>по дате</p>' );
			$( '.select#' + this.id ).append( '<ul class="opt-list" id="cur-opt-list"></ul>' );
			$( this ).children( 'optgroup' ).each(function() {
				$( '#cur-opt-list' ).append( '<li class="optgroup">' + $( this ).attr( 'label' ) + '</li>' );
				$( this ).children( 'option' ).each(function() {
					$( '#cur-opt-list' ).append( '<li class="option">' + $( this ).text() + '</li>' );
				});
			});
			$( this ).children( 'option' ).each(function() {
				$( '#cur-opt-list' ).append( '<li class="option">' + $( this ).text() + '</li>' );
			});
			$( '#cur-opt-list' ).attr( 'id', this.id );
		});

		$( '.select-header' ).on({
			click: function() {
				$( '.opt-list#' + this.id ).toggle();
				$( '.opt-list#' + this.id ).children( 'li' ).attr( 'id', this.id );
			}
		});

		$( '.option' ).on({
			click: function() {
				$( '.opt-list#' + this.id ).hide();
				$( '.select-header#' + this.id ).children( 'p' ).text( $( this ).text() );
				var index = $( this ).parent().children( 'li.option' ).index( $( this ) );
				var curSelect = $( 'opt-list#' + this.id ).prop( 'selectedIndex', index );
				if ( curSelect.val() ) {
					curSelect.change();
				}
			}
		});

		$( document ).mousedown(function( e ) {
			if ( $( e.target ).closest( '.select' ).length == 0 ) {
				$( '.opt-list' ).hide();
			}
		});

		/* Pseudo paging */
		$( '.openings' ).append( '<div class="opening-loader"></div>' );
		$( '.sort .option, .paging a' ).click(function() {
			$( '.paging li' ).removeClass( 'current' );
			$( this ).parent( 'li' ).not( '.neighbour' ).addClass( 'current' );
			$( '.openings' ).css( 'opacity', .3 );
			$( '.opening-loader' ).fadeIn();
			setTimeout(function() {
				$( '.opening-loader' ).hide();
				$( '.openings' ).css( 'opacity', 1 );
			}, 1000 );
			return false;
		})
		/****************/

		/* Opening */
		$( '.star' ).click(function() {
			if ( $( this ).hasClass( 'star-checked' ) ) {
				$( this ).removeClass( 'star-checked' );
			} else {
				$( this ).addClass( 'star-checked' );
			}
		})

		/* No Image */
		$( '.no-image' ).attr( 'src', 'images/opening-header.jpg' );

		/* User Options */
		$( '.user-area' ).on({
			click: function() {
				$( '.user-options' ).toggle();
			}
		});

		$( document ).mousedown(function( e ) {
			if ( $( e.target ).closest( '.user-area' ).length == 0 ) {
				$( '.user-options' ).hide();
			}
		});

		/* File */
		var fileId = 0;
		$( 'input:file' ).hide().each(function() {
			if ( ! this.id ) {
				$( this ).attr( 'id', 'file-' + fileId );
				fileId++;
			}
			$( this ).after( '<input type="text" disabled class="file" id="' + this.id + '"/><input type="button" class="file" id="' + this.id + '" value="Upload" />' );
		});

		$( 'input:button.file' ).click(function() {
			$( 'input[type=file]#' + this.id ).click();
		});

		$( 'input:file' ).change(function() {
			$( 'input[type=text]#' + this.id ).val( $( this ).val().split( '\\' ).pop() );
		})

		/* Add Opening */
		$( '.widget.add-opening' ).click(function() {
			window.location.href = "add_opening.html";
		});

		/* Slider */
		$( '.slider' ).append( '<div class="sliderBtns"></div>' );

		var slideId = 0;
		sliderSize = $( '.slide' ).size();
		$( '.sliderBtns' ).css({ 'left' : $( '.slider' ).width() / 2 - sliderSize * 10 });
		$( '.slide' ).hide().each(function() {
			$( this ).attr( 'id', 'slide-' + slideId );
			$( '.sliderBtns' ).append( '<div class="slider-indicator" id="' + this.id + '"></div>' );
			slideId++;
		});

		$( '.slide#slide-' + curSlide ).show();
		$( '.slider-indicator#slide-' + curSlide ).addClass( 'current' );

		var intervalID = setInterval( slideChange , 5000 );

		$( '.slider-indicator' ).click(function() {
			if ( $( this ).hasClass( 'current' ) || ! enable ) {
				return false;
			}
			clearInterval( intervalID );
			nextSlide = parseInt( this.id.substr( 6 ) );
			slideChange();
			intervalID = setInterval( slideChange , 5000 );
		});

		$( '.slide-img' ).after( '<div class="slide-blackout"></div>' );

		/* Validation */
		$( 'input:submit' ).click(function() {
			if ( $( ':invalid' ).length > 0 ) {
				$( ':invalid' ).addClass( 'invalid' );
				return false;
			}
		});

		$( 'input:reset' ).click(function() {
			$( ':invalid' ).removeClass( 'invalid' );
		})

		/* Placeholder for IE */
		if ( $( 'html' ).is( '.ie7, .ie8, .ie9' ) ) {
			$( 'form ' ).find( 'input[type="text"], input[type="email"], input[type="password"], textarea' ).each(function() {
				var tp = $( this ).attr( 'placeholder' );
				$( this ).attr( 'value', tp ).css( 'color', '#ccc' );
			}).focusin(function() {
				var val = $( this ).attr( 'placeholder' );
				if ( $( this ).val() == val ) {
					$( this ).attr( 'value', '' ).css( 'color', '#303030' );
				}
			}).focusout(function() {
				var val = $( this ).attr( 'placeholder' );
				if( $( this ).val() == "") {
					$( this ).attr( 'value', val ).css( 'color', '#ccc' );
				}
			});

			/* Protected send form */
			$( 'form' ).submit(function() {
				$( this ).find( 'input[type="text"], input[type="email"], input[type="password"], textarea' ).each(function() {
					var val = $( this ).attr( 'placeholder' );
					if ( $( this ).val() == val ) {
						$( this ).attr( 'value', '' );
					}
				})
			});
		}
	});
})(jQuery);