PHP-Skeleton
=======
A standard PHP project skeleton
---------------------------------------------
This is a sample PHP project skeleton.
Following config files are provided:

 * .gitignore               Ignores Eclipse .files and .folders and
                            composers vendor directory.
 * .php_cs                  Config file for PHP-CS-Fixer.
 * build.xml                Build-File for Jenkins jobs.
 * composer.json            Includes psr/log.
 * License.txt              Sample license with BSD license text.
 * phpcs.xml                Config file for PHP_CodeSniffer.
 * phpdox.xml.dist          Config file for phpDox.
 * phpmd.xml                Config file for PHPMD. 
 * phpunit.xml.dist         Config file for PHPUnit.
 * README.md                The file you're actually reading.
 * src/                     The folder for your project files.
 * tests/                   The folder for your projects test files.
 * tests/bootstrap.php      Bootstrap for PHP Unit.

Requirements
------------
 * PHP 5.3+
 * Jenkins
 * Jenkins Plugins: Checkstyle, Clover PHP, DRY, HTML Publisher, JDepend, Plot,
                    PMD, Violations, xUnit

Following QA Tools must be installed in /usr/bin or /usr/local/bin
 * PHPUnit
 * PHP_CodeSniffer
 * PHPLOC
 * PHP_Depend
 * PHPMD
 * PHPCPD
 * phpDox
 * PHP-CS-Fixer