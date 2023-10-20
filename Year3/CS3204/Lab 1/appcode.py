# Student Number: 121464124
# Author: Eugene .Z

# dependacies/imports
import time

# application code
def Fibonacci(n):
	"""
	Fibonacci program done using Recursion
	"""
	
	# Check if input is 0 => print incorrect input
	if n < 0:
		print("Incorrect input, must be greater than 0")

	# Check if n is 0 => return 0
	elif n == 0:
		return 0

	# Check if n is 1,2 => return 1
	elif n == 1 or n == 2:
		return 1

	else:
		return Fibonacci(n-1) + Fibonacci(n-2)

# ============================================== #

# Time Testing Function
def timeofFibonacci(n):
    start_time = time.perf_counter()
    Fibonacci(n)
    end_time = time.perf_counter()
    return end_time - start_time

# Result up to a certain 'n' value
def resultofTest(n):
	print("\tFib Number\t|\tTime Taken")
	for i in range(n+1):
		# print("\t", i, "\t\t", timeofFibonacci(i))
		print(str(i) + "," + str(timeofFibonacci(i)))
		# print(timeofFibonacci(i))
	print()

# Driver Program
resultofTest(50)