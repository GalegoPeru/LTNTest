(function($) {
    const { __ } = wp.i18n;
    const temp = {
        "person": __('Website Owner Name'),
        "organization": __('Organization Name', 'wp-schema-pro'),
        "Webshop": __('Webshop Name', 'wp-schema-pro'),
        "personblog": __('Website Owner Name', 'wp-schema-pro'),
        "Smallbusiness": __('Blog Website Name', 'wp-schema-pro'),
        "Otherbusiness": __('Business Name', 'wp-schema-pro')
    };
    /**
     * AIOSRS Frontend
     *
     * @class WP_Schema_Pro_Settings
     * @since 1.0
     */
    WP_Schema_Pro_Settings = {

        init: function() {

            var self = this;
            this.customFieldDependecy();
            this.customImageSelect();
            this.initRepeater();
            this.toolTips();
            this.regenerateSchema();

            $('select.wp-select2').each(function(index, el) {

                self.init_target_rule_select2(el);
            });

        },
        regenerateSchema: function() {

            $("#wpsp-regenerate-schema").click(function() {

                $(this).next('span.spinner').addClass('is-active');

                jQuery.ajax({
                    url: ajaxurl,
                    type: 'post',
                    dataType: 'json',
                    data: {
                        action: 'regenerate_schema',
                        nonce: $(this).data('nonce')
                    }
                }).success(function(response) {

                    $("#wpsp-regenerate-schema")
                        .next('span.spinner')
                        .removeClass('is-active');

                    $("#wpsp-regenerate-notice").show().delay(2000).fadeOut();
                });
            });
        },
        toolTips: function() {

            $(document).on('click', '.wp-schema-pro-tooltip-icon', function(e) {

                e.preventDefault();
                $('.wp-schema-pro-tooltip-wrapper').removeClass('activate');
                $(this).parent().addClass('activate');
            });

            $(document).on('click', function(e) {

                if (!$(e.target).hasClass('wp-schema-pro-tooltip-description') && !$(e.target).hasClass('wp-schema-pro-tooltip-icon') && $(e.target).closest('.wp-schema-pro-tooltip-description').length == 0) {
                    $('.wp-schema-pro-tooltip-wrapper').removeClass('activate');
                }
            });
        },

        customImageSelect: function() {

            var file_frame;
            window.inputWrapper = '';

            $(document.body).on('click', '.image-field-wrap .aiosrs-image-select', function(e) {

                e.preventDefault();

                window.inputWrapper = $(this).closest('td');

                // Create the media frame.
                file_frame = wp.media({
                    button: {
                        text: 'Select Image',
                        close: false
                    },
                    states: [
                        new wp.media.controller.Library({
                            title: 'Select Custom Image',
                            library: wp.media.query({ type: 'image' }),
                            multiple: false,
                        })
                    ]
                });

                // When an image is selected, run a callback.
                file_frame.on('select', function() {

                    var attachment = file_frame.state().get('selection').first().toJSON();

                    var image = window.inputWrapper.find('.image-field-wrap img');
                    if (image.length == 0) {
                        window.inputWrapper.find('.image-field-wrap').append('<a href="#" class="aiosrs-image-select img"><img src="' + attachment.url + '" /></a>');
                    } else {
                        image.attr('src', attachment.url);
                    }
                    window.inputWrapper.find('.image-field-wrap').addClass('bsf-custom-image-selected');
                    window.inputWrapper.find('.single-image-field').val(attachment.id);

                    file_frame.close();
                });

                file_frame.open();
            });


            $(document).on('click', '.aiosrs-image-remove', function(e) {

                e.preventDefault();
                var parent = $(this).closest('td');
                parent.find('.image-field-wrap').removeClass('bsf-custom-image-selected');
                parent.find('.single-image-field').val('');
                parent.find('.image-field-wrap img').removeAttr('src');
            });

            var file_frame;
            window.inputWrapper = '';
        },

        customFieldDependecy: function() {
            jQuery(document).on('change', '#post-body-content .wp-schema-pro-custom-option-select, .aiosrs-pro-setup-wizard-content.general-setting-content-wrap .wp-schema-pro-custom-option-select', function() {
                var custom_wrap = jQuery(this).next('.custom-field-wrapper');

                custom_wrap.css('display', 'none');
                if ('custom' == jQuery(this).val()) {
                    custom_wrap.css('display', '');
                }
            });

            jQuery(document).on('change', 'select[name="wp-schema-pro-general-settings[site-represent]"]', function() {
                var wrapper = jQuery(this).closest('table'),
                    logo_wrap = wrapper.find('.wp-schema-pro-site-logo-wrap'),
                    company_name_wrap = wrapper.find('.wp-schema-pro-site-name-wrap'),
                    person_name_wrap = wrapper.find('.wp-schema-pro-person-name-wrap');

                company_name_wrap.css('display', 'none');
                person_name_wrap.css('display', 'none');
                if ('' != jQuery(this).val()) {

                    if ('organization' == jQuery(this).val() || 'Webshop' == jQuery(this).val() || 'Smallbusiness' == jQuery(this).val() || 'Otherbusiness' == jQuery(this).val()) {
                        logo_wrap.css('display', '');
                        company_name_wrap.css('display', '');
                    } else {
                        person_name_wrap.css('display', '');
                        logo_wrap.css('display', '');
                    }
                }
            });
            jQuery(document).on('change', 'select[name="wp-schema-pro-general-settings[site-represent]"]', function() {
                var organization_type = jQuery(this).val()
                if ('' != jQuery(this).val()) {
                    if (organization_type in temp) {
                        $('.wpsp-organization-label').text(temp[organization_type]);
                    }
                }

            });
            jQuery(document).on('change', 'select[name="wp-schema-pro-corporate-contact[contact-type]"]', function() {
                var wrapper = jQuery(this).closest('table'),
                    contact_point_wrap = wrapper.find('.wp-schema-pro-other-wrap');
                contact_point_wrap.css('display', 'none');
                if ('' != jQuery(this).val()) {

                    if ('other' == jQuery(this).val()) {

                        contact_point_wrap.css('display', '');
                    }
                }
            });
            $('#add-row').on('click', function() {
                var row = $('.empty-row.screen-reader-text').clone(true);
                row.removeClass('empty-row screen-reader-text');
                row.insertBefore('#repeatable-fieldset-one >tr:last');
                return false;
            });

            $('.remove-row').on('click', function() {
                $(this).parents('tr').remove();
                return false;
            });
        },

        initRepeater: function() {

            $(document).on('click', '.bsf-repeater-add-new-btn', function(event) {
                event.preventDefault();

                var selector = $(this),
                    parent_wrap = selector.closest('.bsf-aiosrs-schema-type-wrap'),
                    total_count = parent_wrap.find('.aiosrs-pro-repeater-table-wrap').length,
                    template = parent_wrap.find('.aiosrs-pro-repeater-table-wrap').first().clone();

                template.find('input, textarea, select').each(function(index, el) {
                    $(this).val('');

                    var field_name = 'undefined' != typeof $(this).attr('name') ? $(this).attr('name').replace('[0]', '[' + total_count + ']') : '',
                        field_class = 'undefined' != typeof $(this).attr('class') ? $(this).attr('class').replace('-0-', '-' + total_count + '-') : '',
                        field_id = 'undefined' != typeof $(this).attr('id') ? $(this).attr('id').replace('-0-', '-' + total_count + '-') : '';

                    $(this).attr('name', field_name);
                    $(this).attr('class', field_class);
                    $(this).attr('id', field_id);
                });

                template.insertBefore(selector);
            });

            $(document).on('click', '.bsf-repeater-close', function(event) {
                event.preventDefault();

                var selector = $(this),
                    parent_wrap = selector.closest('.bsf-aiosrs-schema-type-wrap'),
                    repeater_count = parent_wrap.find('> .aiosrs-pro-repeater-table-wrap').length;

                if (repeater_count > 1) {
                    selector.closest('.aiosrs-pro-repeater-table-wrap').remove();
                }
            });
        },
        init_target_rule_select2: function(selector) {
            $(selector).select2({

                placeholder: "Search Fields...",

                ajax: {
                    url: ajaxurl,
                    dataType: 'json',
                    method: 'post',
                    delay: 250,
                    data: function(params) {
                        return {
                            nonce_ajax: AIOSRS_search.search_field,
                            q: params.term, // search term
                            page: params.page,
                            action: 'bsf_get_specific_pages'
                        };
                    },
                    processResults: function(data) {
                        console.log(data);
                        return {
                            results: data
                        };
                    },
                    cache: true
                },
                minimumInputLength: 2,
            });
        },
    }
    var load_default_values = function() {

        var field = jQuery('select[name="wp-schema-pro-general-settings[site-represent]"]'),
            wrapper = field.closest('table'),
            logo_wrap = wrapper.find('.wp-schema-pro-site-logo-wrap'),
            company_name_wrap = wrapper.find('.wp-schema-pro-site-name-wrap'),
            person_name_wrap = wrapper.find('.wp-schema-pro-person-name-wrap');


        company_name_wrap.css('display', 'none');
        person_name_wrap.css('display', 'none');
        if ('' != field.val()) {

            if ('organization' == field.val() || 'Webshop' == field.val() || 'Smallbusiness' == field.val() || 'Otherbusiness' == field.val()) {
                logo_wrap.css('display', '');
                company_name_wrap.css('display', '');
            } else {
                person_name_wrap.css('display', '');
                logo_wrap.css('display', '');
            }
        }
    }
    var load_default_organization_label = function() {
        var field = jQuery('select[name="wp-schema-pro-general-settings[site-represent]"]'),
            organization_type = field.val();
        if ('' != field) {
            if (organization_type in temp) {
                $('.wpsp-organization-label').text(temp[organization_type]);
            }
        }
    }


    $(document).ready(function() {
        $('.wp-select2').select2();
        $('.wpsp-setup-configuration-settings').select2();
        load_default_values();
        load_default_organization_label();

    });

    /* Initializes the AIOSRS Frontend. */
    $(function() {

        WP_Schema_Pro_Settings.init();


    });
})(jQuery);