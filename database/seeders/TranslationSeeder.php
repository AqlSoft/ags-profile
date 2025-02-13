<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;
use App\Models\TranslationGroup;
use App\Models\TranslationKey;
use App\Models\Translation;

class TranslationSeeder extends Seeder
{
    public function run(): void
    {
        // Get languages
        $arabic = Language::where('code', 'ar')->first();
        $english = Language::where('code', 'en')->first();

        // Create translation groups
        $homeGroup = TranslationGroup::create(['name' => 'home']);
        $messagesGroup = TranslationGroup::create(['name' => 'messages']);

        // Define translations
        $translations = [
            'home' => [
                'ags' => [
                    'ar' => 'مخازن ايمن الغماس',
                    'en' => 'AGS Storing'
                ]
            ],
            'messages' => [
                'welcome' => [
                    'ar' => 'مرحباً بك في موقعنا',
                    'en' => 'Welcome to our website'
                ],
                'about' => [
                    'ar' => 'من نحن',
                    'en' => 'About'
                ],
                'services' => [
                    'ar' => 'خدماتنا',
                    'en' => 'Services'
                ],
                'portfolio' => [
                    'ar' => 'معرض الأعمال',
                    'en' => 'Portfolio'
                ],
                'team' => [
                    'ar' => 'فريق العمل',
                    'en' => 'Team'
                ],
                'contact' => [
                    'ar' => 'اتصل بنا',
                    'en' => 'Contact'
                ]
            ]
        ];

        // Insert translations
        foreach ($translations as $groupName => $keys) {
            $group = TranslationGroup::where('name', $groupName)->first();
            
            foreach ($keys as $key => $values) {
                $translationKey = TranslationKey::create([
                    'group_id' => $group->id,
                    'key' => $key
                ]);

                if (isset($values['ar'])) {
                    Translation::create([
                        'language_id' => $arabic->id,
                        'translation_key_id' => $translationKey->id,
                        'value' => $values['ar']
                    ]);
                }

                if (isset($values['en'])) {
                    Translation::create([
                        'language_id' => $english->id,
                        'translation_key_id' => $translationKey->id,
                        'value' => $values['en']
                    ]);
                }
            }
        }
    }
}
