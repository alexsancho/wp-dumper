<?php

namespace kec\dumper;

use Symfony\Component\VarDumper\Dumper\HtmlDumper as SymfonyHtmlDumper;

class HtmlDumper extends SymfonyHtmlDumper
{
    /**
     * Colour definitions for output.
     *
     * @var array
     */
    protected static $themes = [
        'dark'  => [
            'default'   => 'background-color:#18171B; color:#FF8400; line-height:1.2em; font:12px Menlo, Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:99999; word-break: break-all',
            'num'       => 'font-weight:bold; color:#1299DA',
            'const'     => 'font-weight:bold',
            'str'       => 'font-weight:bold; color:#56DB3A',
            'note'      => 'color:#1299DA',
            'ref'       => 'color:#A0A0A0',
            'public'    => 'color:#FFFFFF',
            'protected' => 'color:#FFFFFF',
            'private'   => 'color:#FFFFFF',
            'meta'      => 'color:#B729D9',
            'key'       => 'color:#56DB3A',
            'index'     => 'color:#1299DA',
            'ellipsis'  => 'color:#FF8400',
            'ns'        => 'user-select:none;',
        ],
        'light' => [
            'default'   => 'background:none; color:#CC7832; line-height:1.2em; font:12px Menlo, Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:99999; word-break: break-all',
            'num'       => 'font-weight:bold; color:#1299DA',
            'const'     => 'font-weight:bold',
            'str'       => 'font-weight:bold; color:#629755;',
            'note'      => 'color:#6897BB',
            'ref'       => 'color:#6E6E6E',
            'public'    => 'color:#262626',
            'protected' => 'color:#262626',
            'private'   => 'color:#262626',
            'meta'      => 'color:#B729D9',
            'key'       => 'color:#789339',
            'index'     => 'color:#1299DA',
            'ellipsis'  => 'color:#CC7832',
            'ns'        => 'user-select:none;',
        ],
    ];
}
