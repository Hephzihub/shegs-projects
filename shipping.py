weight = 41.5

# Ground Shipping

print("For Ground Shipping:")
if weight <= 2:
  cost = weight * 1.50 + 20.00
  print(str(weight) + " lb package will cost")
  print("$" + str(cost))
elif weight <= 6:
  cost = weight * 3.00 + 20.00
  print(str(weight) + " lb package will cost")
  print("$" + str(cost))
elif weight <= 10:
  cost = weight * 4.00 + 20.00
  print(str(weight) + " lb package will cost")
  print("$" + str(cost))
else:
  cost = weight * 4.75 + 20.00
  print(str(weight) + " lb package will cost")
  print("$" + str(cost))

# Ground Shipping Premium

print()
print("For Ground Shipping Premium:")

cost_ground_premium = 125.00
print("Cost is $" + str(cost_ground_premium))
  

# Drone Shipping
print()
print("Drone Shipping:")
if weight <= 2:
  cost = weight * 4.50
  print(str(weight) + " lb package will cost")
  print("$" + str(cost))
elif weight <= 6:
  cost = weight * 9.00
  print(str(weight) + " lb package will cost")
  print("$" + str(cost))
elif weight <= 10:
  cost = weight * 12.00
  print(str(weight) + " lb package will cost")
  print("$" + str(cost))
else:
  cost = weight * 14.25
  print(str(weight) + " lb package will cost")
  print("$" + str(cost))

