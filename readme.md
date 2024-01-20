# How to run

```shell
cd ~
git clone https://github.com/nikitakiselev/benchy.git
cd benchy
composer install
./vendor/bin/phpbench run tests/Benchmark --report=default
./vendor/bin/phpbench run tests/BenchmarkStaticNumbers --report=default
```

Report
```shell
➜  benchy git:(master) ✗ php -v
PHP 8.3.0RC3 (cli) (built: Oct  6 2023 09:19:40) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.3.0RC3, Copyright (c) Zend Technologies
    with Zend OPcache v8.3.0RC3, Copyright (c), by Zend Technologies
➜  benchy git:(master) ./vendor/bin/phpbench run tests/BenchmarkStaticNumbers --report=default 
PHPBench (1.2.15) running benchmarks...
with configuration file: /home/user/code/benchy/phpbench.json
with PHP version 8.3.0RC3, xdebug ❌, opcache ❌

\Nikitakiselev\Tests\Benchmark\ComparationMethod3StaticNumbersBench

    benchConsume............................I9 - Mo0.068μs (±0.79%)

\Nikitakiselev\Tests\Benchmark\ComparationMethod4StaticNumbersBench

    benchConsume............................I9 - Mo0.071μs (±1.36%)

\Nikitakiselev\Tests\Benchmark\ComparationMethod1StaticNumbersBench

    benchConsume............................I9 - Mo0.067μs (±0.64%)

\Nikitakiselev\Tests\Benchmark\ComparationMethod2StaticNumbersBench

    benchConsume............................I9 - Mo0.060μs (±0.65%)

Subjects: 4, Assertions: 0, Failures: 0, Errors: 0
+------+--------------------------------------+--------------+-----+---------+----------+----------+--------------+----------------+
| iter | benchmark                            | subject      | set | revs    | mem_peak | time_avg | comp_z_value | comp_deviation |
+------+--------------------------------------+--------------+-----+---------+----------+----------+--------------+----------------+
| 0    | ComparationMethod3StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.069μs  | +1.14σ       | +0.89%         |
| 1    | ComparationMethod3StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.068μs  | -0.70σ       | -0.55%         |
| 2    | ComparationMethod3StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.068μs  | -0.75σ       | -0.59%         |
| 3    | ComparationMethod3StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.068μs  | -1.10σ       | -0.86%         |
| 4    | ComparationMethod3StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.069μs  | +1.91σ       | +1.50%         |
| 5    | ComparationMethod3StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.068μs  | -0.55σ       | -0.43%         |
| 6    | ComparationMethod3StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.068μs  | -0.75σ       | -0.59%         |
| 7    | ComparationMethod3StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.068μs  | -0.81σ       | -0.64%         |
| 8    | ComparationMethod3StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.069μs  | +0.78σ       | +0.61%         |
| 9    | ComparationMethod3StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.069μs  | +0.83σ       | +0.65%         |
| 0    | ComparationMethod4StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.071μs  | -0.67σ       | -0.90%         |
| 1    | ComparationMethod4StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.071μs  | -0.81σ       | -1.10%         |
| 2    | ComparationMethod4StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.074μs  | +2.11σ       | +2.86%         |
| 3    | ComparationMethod4StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.074μs  | +1.81σ       | +2.45%         |
| 4    | ComparationMethod4StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.071μs  | -0.65σ       | -0.88%         |
| 5    | ComparationMethod4StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.072μs  | -0.16σ       | -0.22%         |
| 6    | ComparationMethod4StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.072μs  | -0.21σ       | -0.29%         |
| 7    | ComparationMethod4StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.071μs  | -0.55σ       | -0.74%         |
| 8    | ComparationMethod4StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.071μs  | -0.44σ       | -0.59%         |
| 9    | ComparationMethod4StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.071μs  | -0.43σ       | -0.58%         |
| 0    | ComparationMethod1StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.067μs  | -0.78σ       | -0.50%         |
| 1    | ComparationMethod1StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.067μs  | -0.15σ       | -0.10%         |
| 2    | ComparationMethod1StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.067μs  | +0.19σ       | +0.12%         |
| 3    | ComparationMethod1StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.067μs  | -0.91σ       | -0.59%         |
| 4    | ComparationMethod1StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.067μs  | -0.10σ       | -0.06%         |
| 5    | ComparationMethod1StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.067μs  | -0.50σ       | -0.32%         |
| 6    | ComparationMethod1StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.068μs  | +1.79σ       | +1.15%         |
| 7    | ComparationMethod1StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.068μs  | +1.97σ       | +1.27%         |
| 8    | ComparationMethod1StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.067μs  | -0.61σ       | -0.40%         |
| 9    | ComparationMethod1StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.067μs  | -0.90σ       | -0.58%         |
| 0    | ComparationMethod2StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.060μs  | -0.56σ       | -0.36%         |
| 1    | ComparationMethod2StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.061μs  | +0.07σ       | +0.05%         |
| 2    | ComparationMethod2StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.061μs  | +0.11σ       | +0.07%         |
| 3    | ComparationMethod2StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.060μs  | -0.57σ       | -0.37%         |
| 4    | ComparationMethod2StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.060μs  | -0.44σ       | -0.28%         |
| 5    | ComparationMethod2StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.062μs  | +2.84σ       | +1.85%         |
| 6    | ComparationMethod2StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.060μs  | -0.56σ       | -0.36%         |
| 7    | ComparationMethod2StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.060μs  | -0.60σ       | -0.39%         |
| 8    | ComparationMethod2StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.060μs  | -0.60σ       | -0.39%         |
| 9    | ComparationMethod2StaticNumbersBench | benchConsume |     | 1000000 | 707,136b | 0.061μs  | +0.30σ       | +0.19%         |
+------+--------------------------------------+--------------+-----+---------+----------+----------+--------------+----------------+
```