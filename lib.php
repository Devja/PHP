# sns 식 시간 변환 
function sns_time($time) {
	// 현재 시간과 게시된 시간의 차를 구한다. 단위는 sec
	$second_time = time() - strtotime($time);
	
	if($second_time <= 60) {
		//차이가 60 초 이하
		return '1 분전';
	} else if($second_time > 60 && $second_time <= 3600) {
		// 차이가 한시간 이하
		return round($second_time / 60).'분 전';
	} else if($second_time > 3600 && $second_time <= 86400) {
		// 차이가 하루 이하
		return round($second_time / 3600).'시간 전';
	} else if($second_time > 86400 && $second_time <= 604800) {
		// 차이가 일주일 이하
		return round($second_time / 86400).'일 전';
	} else if($second_time > 604800 && $second_time <= 2592000) {
		// 차이가 월 이하
		return round($second_time / 604800).'주 전';
	} else if($second_time > 2592000 && $second_time <= 31536000) {
		// 차이가 년 이하
		return round($second_time / 2592000).'개월 전';
	} else {
		// 나머지는 1년 이상으로 보고 출력
		return round($second_time / 31536000).'년 전';
	}
}
