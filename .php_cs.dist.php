<?php
return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'ordered_class_elements' => [
            'order' =>
                [
                    "use_trait",
                    "constant_public",
                    "constant_protected",
                    "constant_private",
                    "property_public_static",
                    "property_public",
                    "property_protected_static",
                    "property_protected",
                    "property_private_static",
                    "property_private",
                    "construct",
                    "destruct",
                    "magic",
                    "phpunit",
                    "method_public_static",
                    "method_public",
                    "method_protected_static",
                    "method_protected",
                    "method_private_static",
                    "method_private",
                ]
        ],
        'blank_line_before_statement' => [
            'statements' => [
                "break",
                "continue",
                "declare",
                "return",
                "throw",
                "try"
            ]
        ],
        'no_extra_consecutive_blank_lines' => ["extra"],
    ]);
