( function( api ) {

	// Extends our custom "digital-marketing-agency" section.
	api.sectionConstructor['digital-marketing-agency'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );