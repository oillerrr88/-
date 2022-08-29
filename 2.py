#เปลี่ยนค่าบางตัวที่เราต้องการ ให้มันเท่ากับค่าที่เรากำหนด
from calendar import FRIDAY, weekday


numlist =[1,2,3,5,5,6]
numlist[3]=4
print(numlist)
#เปลี่ยนหลายตัว ให้มันเท่ากับค่าที่เรากำหนด
numlist =[1,1,1,4,5,6]
numlist[1:3]=2,3
print(numlist)
#ต่อลิตส์ให้อยู่ในลิตเดียวกัน+
weekend=["wed","thurs"]
weekday=["FRI","SAT","SUN"]
weekend += weekday
print(weekend)
#เลือกค่าที่เราต้องการเอาออก remove
numlist=[10,10,20,30,40,50]
numlist.remove(10)
print(numlist)
#ลบโดยใช้คำสั่งpop
numlist=[10,10,20,30,40,50]
numlist.pop(2)
print(numlist)
#ลบโดยใช้dleสามารถลบหลายๆตัวได้
numlist=[10,20,30,40,50,60,50]
del numlist[0:1]
print(numlist)