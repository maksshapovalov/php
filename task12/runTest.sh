#!/bin/bash
i=0;
echo "" > test.log
for file in /tests/*
		do
				((i++))
				echo "start test #$i name:$file"
				test_result=$(./phpunit-3.7.phar $file)
				echo "----------------$i----------------------" >> test.log
				echo "--------$file---------" >> test.log
				echo "$test_result" >> test.log
				echo "----------------------------------------" >> test.log
				echo "" >> test.log
		done
