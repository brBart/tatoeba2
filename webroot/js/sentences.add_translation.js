/**
 * Tatoeba Project, free collaborative creation of multilingual corpuses project
 * Copyright (C) 2009  HO Ngoc Phuong Trang <tranglich@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


$(document).ready(function() {
    $(document).watch("addrule", function() {
        $(".translateLink:not(:has(a.disabled))").off();
        $(".translateLink:not(:has(a.disabled))").click(function(){
            var sentenceId = $(this).attr("data-sentence-id");
            // Controls
            var submitButton = $("#_" + sentenceId + "_submit");
            var cancelButton = $("#_" + sentenceId + "_cancel");
            var textArea = $("#_" + sentenceId + "_text");
            var langSelect = $("#translationLang_" + sentenceId);
            var translations = $("#_" + sentenceId + "_translations");
            var addTranslations = $(".addTranslations");
            var translationFor = $("#translation_for_" + sentenceId);
            var loadingIcon = $("#_" + sentenceId + "_loading");
            var sessionExpired = $("#session_expired");

            // State
            var rootUrl = get_tatoeba_root_url();
            var translating = false;

            /*
             * Save translation.
             */
            function save() {
                var sentenceText = textArea.val();
                var selectLang = langSelect.val();

                if ($.trim(sentenceText) != "") {
                    if (translating) {
                      return;
                    }
                    translating = true;

                    sentenceText = normalized_sentence(sentenceText);

                    translations.show();
                    loadingIcon.show();
                    addTranslations.hide();

                    $.post(
                        rootUrl + "/sentences/save_translation",
                        {
                            "id": sentenceId,
                            "selectLang": selectLang,
                            "value": sentenceText
                        },
                        function(data) {
                            translating = false;
                            sessionExpired.remove();
                            loadingIcon.hide();
                            translations.watch("prepend", data);
                            textArea.val('');
                            // display autogenerated transcriptions
                            translations.find("div:first-child .needsReview").show();
                        },
                        "html"
                    );

                }
            }

            // TODO: Unbind only from the functions we have explicitly bound

            // Displaying translation input and hiding translations
            translationFor.show();
            textArea.focus();
            translations.hide();

            // Submitting translation by clicking on button
            submitButton.unbind("click");
            submitButton.click(save);

            // Submitting translation by pressing enter
            // NOTE : this is annoying when entering Japanese or Chinese because
            // enter is used to validate the choice of kanjis
            // NOTE2: on Linux it's space which is used to validate
            textArea.unbind("keypress");
            textArea.keypress(function(e) {
                if (e.keyCode == 13) {
                    save();
                }
            });

            // Cancel
            cancelButton.unbind("click");
            cancelButton.click(function(){
                translations.show();
                addTranslations.hide();
            });
        });


      	/**
         * Changes Flag in Add Translation box on Changing Language
         */
        $( ".language-selector" ).change(function() {
            if ($(this).val()!='auto') {
                var lang_flag_url = '/img/flags/'+$(this).val()+'.png';
                $(this).next().attr('src', lang_flag_url);
                $(this).next().attr('alt', $(this).val());
                $(this).next().show();
            } else {
                $(this).next().hide();
            }
        });
    });
});