jQuery( document ).ready(
	function () {

		// Retrieve the Google Fonts url from the Customizer and append it to head.
		wp.customize.preview.bind(
			'olympusFontURL',
			function ( url ) {
				jQuery( "head" ).append( url );
			}
		);


		// Update the font family for this element.
		function fontFamilyChange( selector, value ) {
			if ( value == 'default' ) {
				jQuery( selector ).css( 'font-family', '' );
				wp.customize.preview.send('refresh');
			} else {
				jQuery( selector ).each(function (i, v) {
					v.style.setProperty( 'font-family', value.split('-').join(' '), 'important' );
				});
			}
		}

		// Loop through the elements and bind the controls.
		$.map( ogf_elements, function( val, id ) {

			wp.customize(
				id + '_font',
				function ( value ) {
					value.bind(
						function ( to ) {
							fontFamilyChange( val.selectors, to );
						}
					);
				}
			);

			wp.customize(
				id + '_font_weight',
				function ( value ) {
					value.bind(
						function ( to ) {
							if (to == '0') {
								wp.customize.preview.send('refresh');
							} else {
								jQuery( val.selectors ).each(function (i, v) {
									v.style.setProperty( 'font-weight', to, 'important' );
								});
							}
						}
					);
				}
			);

			wp.customize(
				id + '_font_style',
				function ( value ) {
					value.bind(
						function ( to ) {
							jQuery( val.selectors ).each(function (i, v) {
								v.style.setProperty( 'font-style', to, 'important' );
							});
						}
					);
				}
			);

			wp.customize(
				id + '_font_color',
				function ( value ) {
					value.bind(
						function ( to ) {
							jQuery( val.selectors ).each(function (i, v) {
								v.style.setProperty( 'color', to, 'important' );
							});
						}
					);
				}
			);

			wp.customize(
				id + '_font_size',
				function ( value ) {
					value.bind(
						function ( to ) {
							if (to == '') {
								wp.customize.preview.send('refresh');
							}
							jQuery( val.selectors ).each(function (i, v) {
								if (to == '') {
									v.style.removeProperty( 'font-size' );
								} else {
									v.style.setProperty( 'font-size', to + 'px', 'important' );
								}
							});
						}
					);
				}
			);

			wp.customize(
				id + '_line_height',
				function ( value ) {
					value.bind(
						function ( to ) {
							jQuery( val.selectors ).each(function (i, v) {
								v.style.setProperty( 'line-height', to, 'important' );
							});
						}
					);
				}
			);

		});

	}
); // jQuery( document ).ready
