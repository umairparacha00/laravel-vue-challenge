import moment from 'moment';

export default function useDateFormatter() {
    const formatDate = (date, format = 'YYYY-MM-DD') => {
        return moment(date).format(format);
    }

    return { formatDate };
}
