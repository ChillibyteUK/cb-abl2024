<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude([
        'node_modules',
        'vendor',
        '.git',
        '.vscode',
        '.idea',
        'build',
        'dist',
        '.config/Code/User/History', // exclude this!
    ])
    ->name('*.php')
    ->ignoreDotFiles(false)
    ->ignoreVCS(true);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => ['default' => 'align_single_space_minimal'],
        'no_trailing_comma_in_list_call' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'phpdoc_align' => false,
        'blank_line_before_statement' => ['statements' => ['return']],
        'no_unused_imports' => true,
    ])
    ->setFinder($finder);

