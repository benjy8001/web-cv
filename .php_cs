<?php

// Inspired by  https://github.com/jolicode/codingstyle

$header = <<<OEF
OEF;

$finder = PhpCsFixer\Finder::create()
    ->exclude('node_modules')
    ->exclude('vendor')
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR1' => true,
        '@PSR2' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'header_comment' => ['header' => $header],
        'array_syntax' => ['syntax' => 'short'],
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        'heredoc_to_nowdoc' => true,
        'php_unit_strict' => true,
        'php_unit_construct' => true,
        'no_superfluous_phpdoc_tags' => false,
        'single_line_throw' => false,
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_order' => true,
        'strict_comparison' => true,
        'strict_param' => true,
        'no_extra_consecutive_blank_lines' => [
            'break',
            'continue',
            'extra',
            'return',
            'throw',
            'use',
            'parenthesis_brace_block',
            'square_brace_block',
            'curly_brace_block',
        ],
        'no_short_echo_tag' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'semicolon_after_instruction' => true,
        'combine_consecutive_unsets' => true,
        'ternary_to_null_coalescing' => true,
    ])
    ->setFinder($finder)
;

