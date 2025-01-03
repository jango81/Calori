export class Time {
    constructor() {
        this.week = {
            "sunday": 0,
            "monday": 1,
            "tuesday": 2,
            "wednesday": 3,
            "thursday": 4,
            "friday": 5,
            "saturday": 6,
        };
    }
    getDayNumber(dayName) {
        const daysOfWeek = {
            "sunday": 0,
            "monday": 1,
            "tuesday": 2,
            "wednesday": 3,
            "thursday": 4,
            "friday": 5,
            "saturday": 6,
        };

        return daysOfWeek[dayName.toLowerCase()] ?? null;
    }
    splitTimeString(timeString) {
        const [hours, minutes] = timeString.split(":").map(Number);

        return [hours, minutes];
    }
    getCurrentDateInfo() {
        const currentDate = new Date();

        return {
            fullDate: currentDate,
            day: currentDate.getDay(),
            date: currentDate.getDate(),
            month: currentDate.getMonth(),
            year: currentDate.getFullYear(),
            hours: currentDate.getHours(),
            minutes: currentDate.getMinutes(),
            seconds: currentDate.getSeconds(),
            milliseconds: currentDate.getMilliseconds(),
        };
    }
    calcRemainingDays(finishDate = null, finishDay, currentDate) {
        finishDay = this.getDayNumber(finishDay);
        let daysRemaining;

        if (currentDate.day < finishDay) {
            daysRemaining = finishDay - currentDate.day;
        } else if (currentDate.day === finishDay && finishDate) {
            if (Date.parse(currentDate.fullDate) > Date.parse(finishDate)) {
                daysRemaining = 7;
            } else {
                daysRemaining = 0;
            }
        } else {
            daysRemaining = 7 - (currentDate.day - finishDay);
        }

        return daysRemaining;
    }
    getEndDate(endDay, endTime = "00:00") {
        const currentDate = this.getCurrentDateInfo();
        const [hours, minutes] = this.splitTimeString(endTime);
        const finishDay = endDay;
        const finishDate = new Date(currentDate.fullDate);
        finishDate.setHours(hours, minutes, 0, 0);

        const daysRemaining = this.calcRemainingDays(finishDate, finishDay, currentDate);

        finishDate.setDate(currentDate.date + daysRemaining);

        return finishDate;
    }

    updateDeliveryDate(updateDate, deliveryDay) {
        const date = new Date(updateDate);
        const deliveryDayNum = this.getDayNumber(deliveryDay);
        const dayDiff = deliveryDayNum - date.getDay();

        date.setDate(date.getDate() + dayDiff);

        return date;
    }
}
