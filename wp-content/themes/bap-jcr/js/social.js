var config = {
    ui: {
        buttonText: 'Partagez', // change the text of the button, [Default: `Share`]
    },
    networks: {
        googlePlus: {
            enabled:false // Enable Google+. [Default: true]

        },
        twitter: {
            enabled:false      // Enable Twitter. [Default: true]

        },
        facebook: {
            enabled:true      // Enable Facebook. [Default: true]
            // image to be shared to Facebook [Default: config.image]
        },
        pinterest: {
            enabled:true      // Enable Pinterest. [Default: true]
            // text to be shared alongside your link to Pinterest [Default: config.description]
        },
        reddit: {
            enabled:false  // Enable Reddit. [Default: true]

        },
        linkedin: {
            enabled:false      // Enable LinkedIn. [Default: true]

        },
        whatsapp: {
            enabled:false      // Enable WhatsApp. [Default: true]

        },
        email: {
            enabled:false      // Enable Email. [Default: true]

        }
    }
}
var share = new ShareButton(config);