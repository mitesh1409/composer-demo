<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f9ba08e0b04c3f2b917db0cadb4e55b
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $classMap = array (
        'Carbon\\Carbon' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Carbon.php',
        'Carbon\\CarbonImmutable' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/CarbonImmutable.php',
        'Carbon\\CarbonInterface' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/CarbonInterface.php',
        'Carbon\\CarbonInterval' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/CarbonInterval.php',
        'Carbon\\CarbonPeriod' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/CarbonPeriod.php',
        'Carbon\\CarbonTimeZone' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/CarbonTimeZone.php',
        'Carbon\\Cli\\Invoker' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Cli/Invoker.php',
        'Carbon\\Doctrine\\CarbonType' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Doctrine/CarbonType.php',
        'Carbon\\Doctrine\\DateTimeDefaultPrecision' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Doctrine/DateTimeDefaultPrecision.php',
        'Carbon\\Doctrine\\DateTimeImmutableType' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Doctrine/DateTimeImmutableType.php',
        'Carbon\\Doctrine\\DateTimeType' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Doctrine/DateTimeType.php',
        'Carbon\\Exceptions\\BadUnitException' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Exceptions/BadUnitException.php',
        'Carbon\\Exceptions\\InvalidDateException' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Exceptions/InvalidDateException.php',
        'Carbon\\Exceptions\\NotAPeriodException' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Exceptions/NotAPeriodException.php',
        'Carbon\\Exceptions\\NotLocaleAwareException' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Exceptions/NotLocaleAwareException.php',
        'Carbon\\Exceptions\\ParseErrorException' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Exceptions/ParseErrorException.php',
        'Carbon\\Factory' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Factory.php',
        'Carbon\\FactoryImmutable' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/FactoryImmutable.php',
        'Carbon\\Language' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Language.php',
        'Carbon\\Laravel\\ServiceProvider' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Laravel/ServiceProvider.php',
        'Carbon\\Traits\\Boundaries' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Boundaries.php',
        'Carbon\\Traits\\Cast' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Cast.php',
        'Carbon\\Traits\\Comparison' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Comparison.php',
        'Carbon\\Traits\\Converter' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Converter.php',
        'Carbon\\Traits\\Creator' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Creator.php',
        'Carbon\\Traits\\Date' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Date.php',
        'Carbon\\Traits\\Difference' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Difference.php',
        'Carbon\\Traits\\Localization' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Localization.php',
        'Carbon\\Traits\\Macro' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Macro.php',
        'Carbon\\Traits\\Mixin' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Mixin.php',
        'Carbon\\Traits\\Modifiers' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Modifiers.php',
        'Carbon\\Traits\\Mutability' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Mutability.php',
        'Carbon\\Traits\\ObjectInitialisation' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/ObjectInitialisation.php',
        'Carbon\\Traits\\Options' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Options.php',
        'Carbon\\Traits\\Rounding' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Rounding.php',
        'Carbon\\Traits\\Serialization' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Serialization.php',
        'Carbon\\Traits\\Test' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Test.php',
        'Carbon\\Traits\\Timestamp' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Timestamp.php',
        'Carbon\\Traits\\Units' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Units.php',
        'Carbon\\Traits\\Week' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Traits/Week.php',
        'Carbon\\Translator' => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon/Translator.php',
        'MyApp\\Bot' => __DIR__ . '/../..' . '/app/Bot.php',
        'MyApp\\Library\\IntNumber' => __DIR__ . '/../..' . '/app/Library/IntNumber.php',
        'Symfony\\Component\\Translation\\Catalogue\\AbstractOperation' => __DIR__ . '/..' . '/symfony/translation/Catalogue/AbstractOperation.php',
        'Symfony\\Component\\Translation\\Catalogue\\MergeOperation' => __DIR__ . '/..' . '/symfony/translation/Catalogue/MergeOperation.php',
        'Symfony\\Component\\Translation\\Catalogue\\OperationInterface' => __DIR__ . '/..' . '/symfony/translation/Catalogue/OperationInterface.php',
        'Symfony\\Component\\Translation\\Catalogue\\TargetOperation' => __DIR__ . '/..' . '/symfony/translation/Catalogue/TargetOperation.php',
        'Symfony\\Component\\Translation\\Command\\XliffLintCommand' => __DIR__ . '/..' . '/symfony/translation/Command/XliffLintCommand.php',
        'Symfony\\Component\\Translation\\DataCollectorTranslator' => __DIR__ . '/..' . '/symfony/translation/DataCollectorTranslator.php',
        'Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector' => __DIR__ . '/..' . '/symfony/translation/DataCollector/TranslationDataCollector.php',
        'Symfony\\Component\\Translation\\DependencyInjection\\TranslationDumperPass' => __DIR__ . '/..' . '/symfony/translation/DependencyInjection/TranslationDumperPass.php',
        'Symfony\\Component\\Translation\\DependencyInjection\\TranslationExtractorPass' => __DIR__ . '/..' . '/symfony/translation/DependencyInjection/TranslationExtractorPass.php',
        'Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPass' => __DIR__ . '/..' . '/symfony/translation/DependencyInjection/TranslatorPass.php',
        'Symfony\\Component\\Translation\\DependencyInjection\\TranslatorPathsPass' => __DIR__ . '/..' . '/symfony/translation/DependencyInjection/TranslatorPathsPass.php',
        'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/CsvFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\DumperInterface' => __DIR__ . '/..' . '/symfony/translation/Dumper/DumperInterface.php',
        'Symfony\\Component\\Translation\\Dumper\\FileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/FileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/IcuResFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\IniFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/IniFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/JsonFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\MoFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/MoFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/PhpFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\PoFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/PoFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\QtFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/QtFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/XliffFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/YamlFileDumper.php',
        'Symfony\\Component\\Translation\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/translation/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Translation\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/translation/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Translation\\Exception\\InvalidResourceException' => __DIR__ . '/..' . '/symfony/translation/Exception/InvalidResourceException.php',
        'Symfony\\Component\\Translation\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/translation/Exception/LogicException.php',
        'Symfony\\Component\\Translation\\Exception\\NotFoundResourceException' => __DIR__ . '/..' . '/symfony/translation/Exception/NotFoundResourceException.php',
        'Symfony\\Component\\Translation\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/translation/Exception/RuntimeException.php',
        'Symfony\\Component\\Translation\\Extractor\\AbstractFileExtractor' => __DIR__ . '/..' . '/symfony/translation/Extractor/AbstractFileExtractor.php',
        'Symfony\\Component\\Translation\\Extractor\\ChainExtractor' => __DIR__ . '/..' . '/symfony/translation/Extractor/ChainExtractor.php',
        'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => __DIR__ . '/..' . '/symfony/translation/Extractor/ExtractorInterface.php',
        'Symfony\\Component\\Translation\\Extractor\\PhpExtractor' => __DIR__ . '/..' . '/symfony/translation/Extractor/PhpExtractor.php',
        'Symfony\\Component\\Translation\\Extractor\\PhpStringTokenParser' => __DIR__ . '/..' . '/symfony/translation/Extractor/PhpStringTokenParser.php',
        'Symfony\\Component\\Translation\\Formatter\\IntlFormatter' => __DIR__ . '/..' . '/symfony/translation/Formatter/IntlFormatter.php',
        'Symfony\\Component\\Translation\\Formatter\\IntlFormatterInterface' => __DIR__ . '/..' . '/symfony/translation/Formatter/IntlFormatterInterface.php',
        'Symfony\\Component\\Translation\\Formatter\\MessageFormatter' => __DIR__ . '/..' . '/symfony/translation/Formatter/MessageFormatter.php',
        'Symfony\\Component\\Translation\\Formatter\\MessageFormatterInterface' => __DIR__ . '/..' . '/symfony/translation/Formatter/MessageFormatterInterface.php',
        'Symfony\\Component\\Translation\\IdentityTranslator' => __DIR__ . '/..' . '/symfony/translation/IdentityTranslator.php',
        'Symfony\\Component\\Translation\\Loader\\ArrayLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/ArrayLoader.php',
        'Symfony\\Component\\Translation\\Loader\\CsvFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/CsvFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\FileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/FileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/IcuDatFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/IcuResFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\IniFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/IniFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\JsonFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/JsonFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/symfony/translation/Loader/LoaderInterface.php',
        'Symfony\\Component\\Translation\\Loader\\MoFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/MoFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\PhpFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/PhpFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\PoFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/PoFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\QtFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/QtFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\XliffFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/XliffFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\YamlFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/YamlFileLoader.php',
        'Symfony\\Component\\Translation\\LoggingTranslator' => __DIR__ . '/..' . '/symfony/translation/LoggingTranslator.php',
        'Symfony\\Component\\Translation\\MessageCatalogue' => __DIR__ . '/..' . '/symfony/translation/MessageCatalogue.php',
        'Symfony\\Component\\Translation\\MessageCatalogueInterface' => __DIR__ . '/..' . '/symfony/translation/MessageCatalogueInterface.php',
        'Symfony\\Component\\Translation\\MetadataAwareInterface' => __DIR__ . '/..' . '/symfony/translation/MetadataAwareInterface.php',
        'Symfony\\Component\\Translation\\Reader\\TranslationReader' => __DIR__ . '/..' . '/symfony/translation/Reader/TranslationReader.php',
        'Symfony\\Component\\Translation\\Reader\\TranslationReaderInterface' => __DIR__ . '/..' . '/symfony/translation/Reader/TranslationReaderInterface.php',
        'Symfony\\Component\\Translation\\Translator' => __DIR__ . '/..' . '/symfony/translation/Translator.php',
        'Symfony\\Component\\Translation\\TranslatorBagInterface' => __DIR__ . '/..' . '/symfony/translation/TranslatorBagInterface.php',
        'Symfony\\Component\\Translation\\Util\\ArrayConverter' => __DIR__ . '/..' . '/symfony/translation/Util/ArrayConverter.php',
        'Symfony\\Component\\Translation\\Util\\XliffUtils' => __DIR__ . '/..' . '/symfony/translation/Util/XliffUtils.php',
        'Symfony\\Component\\Translation\\Writer\\TranslationWriter' => __DIR__ . '/..' . '/symfony/translation/Writer/TranslationWriter.php',
        'Symfony\\Component\\Translation\\Writer\\TranslationWriterInterface' => __DIR__ . '/..' . '/symfony/translation/Writer/TranslationWriterInterface.php',
        'Symfony\\Contracts\\Translation\\LocaleAwareInterface' => __DIR__ . '/..' . '/symfony/translation-contracts/LocaleAwareInterface.php',
        'Symfony\\Contracts\\Translation\\Test\\TranslatorTest' => __DIR__ . '/..' . '/symfony/translation-contracts/Test/TranslatorTest.php',
        'Symfony\\Contracts\\Translation\\TranslatorInterface' => __DIR__ . '/..' . '/symfony/translation-contracts/TranslatorInterface.php',
        'Symfony\\Contracts\\Translation\\TranslatorTrait' => __DIR__ . '/..' . '/symfony/translation-contracts/TranslatorTrait.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f9ba08e0b04c3f2b917db0cadb4e55b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f9ba08e0b04c3f2b917db0cadb4e55b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f9ba08e0b04c3f2b917db0cadb4e55b::$classMap;

        }, null, ClassLoader::class);
    }
}
